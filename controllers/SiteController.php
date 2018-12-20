<?php

namespace app\controllers;

use app\models\CourseSite;
use app\models\Registers;
use app\models\Student;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Usertemp;
use app\models\RegisterForm;
use yii\base\NotSupportedException;
use app\models\Request;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','request'],
                'rules' => [
                    [
                        'actions' => ['logout','request'],
                        'allow' => true,
                        'roles' => ['@'],								// @ all roles
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
			 ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) { 	
			switch($model->login()){
				case 0:
					$model->password = ''; 
					return $this->render('login', [
						'model' => $model,
						]);
					break;
				case 1: 
					return $this->roleBasedHomePage();  // render della landing page in base al ruolo
					break;
				case 100:
				// conservo username e password del form di login
					// Salvataggio dei dati nella tabella temporanea
					$temp = new Usertemp();
					$temp->setUsername($model->username);
					$temp->save();
					return $this->redirect(array('site/register', 'username' => $model->username));
					break;
			}
			
        }
        // questo render serve per far vedere la pagina di login la prima volta
        $model->password = ''; 
		return $this->render('login', [
				'model' => $model,
		]);
      
    }
    public function actionRegister($username) 
    {
		if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
		$register = new RegisterForm();
		if($register->load(Yii::$app->request->post()))
		{
			$temp = new Usertemp();
			if($temp->findByUsername($username)){
				if($register->register($username)){
					return $this->redirect(array('site/login'));  // landing page
			}}
			else return $this->redirect('index');
		}
		
		$error = $register->getErrors();
		Yii::error($error);
		
		$temp = new Usertemp();
		if($temp->findByUsername($username))
		{
			return $this->render('register', [
				'model' => $register,
				'username' => $username
			]);
		}
		else return $this->redirect('index');		// user non nella fase intermedia PAGINA DI ERRORE
	}
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
	
	protected function roleBasedHomePage() {
		 
		$role = Yii::$app->authManager->getRolesByUser(\Yii::$app->user->identity->id); //however you define your role, have the value output to this variable
		if(isset($role['admin'])){
			return $this->redirect(array('/admin')); 
		}
		else{
			if(isset($role['staff'])){
				return $this->redirect(array('/staffhome'));
			}
			else{
				if(isset($role['teacher'])){
					return $this->redirect(array('/teacher'));
				}
				else{
					if(isset($role['student'])){
						return $this->redirect(array('site/studenthome')); 					
						}
				}
			}
		}
	}

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionStudent()
    {
        $this->render('student');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
	public function actionStudenthome()
    {
        $student = Student::findOne(\Yii::$app->user->identity->id);
		return $this->render('studenthome', [
		    'student' => $student,
            'courses' => $student->getCourseSites()->all()
				]);
	}

	public function actionRequest($thesis)
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post())) {
             $model->setStudent(\Yii::$app->user->identity->id);
             $model->setData();
             if($model->save()){
                 return $this->render('studenthome');
             }

         }
        return $this->render('request', [
            'model' => $model,
            'thesis' => $thesis,
        ]);
    }
	// useful to render a custom template in case of error
/*
     public function actionError()
    {
        $error = Yii::app()->errorHandler->error;
        switch($error['code'])
        {
            case 404:

                $this->render('error404', array('error' => $error));
                break;
        }
    }*/


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
