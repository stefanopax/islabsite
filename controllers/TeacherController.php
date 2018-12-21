<?php

namespace app\controllers;

use app\models\Exam;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\base\NotSupportedException;
use yii\web\UploadedFile;

class TeacherController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
		 'access' => [
                'class' => AccessControl::className(),
                //'only' => ['view'],
                'rules' => [
                    [
                        'actions' => ['index', 'exam'],
                        'allow' => true,
                        'roles' => ['teacher'],
                    ],
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
		if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
		return $this->render('index');
    }

    /**
     * Displays exams.
     *
     * @return string
     */
    public function actionExam()
    {
        $model = new Exam();
        return $this->render('exam', ['model' => $model]);
    }
}

    
   