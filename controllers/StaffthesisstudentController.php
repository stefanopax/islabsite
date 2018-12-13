<?php

namespace app\controllers;

use Yii;
use app\models\Request;
use app\models\SearchRequest;
use yii\db\Exception;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Thesis;
use yii\filters\AccessControl;

/**
 * StaffthesisstudentController implements the CRUD actions for Request model.
 */
class StaffthesisstudentController extends Controller
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
                        'actions' => ['view','index','create','update','delete','create0'],
                        'allow' => true,
                        'roles' => ['staff'],								// @ tutti i ruoli
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchRequest();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Request model.
     * @param integer $thesis
     * @param integer $student
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($thesis, $student)
    {
        return $this->render('view', [
            'model' => $this->findModel($thesis, $student),
        ]);
    }

    /**
     * Creates a new Request model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post())) {
            $model->setData();
            if ($model->save()) {
                return $this->redirect(['view', 'thesis' => $model->thesis, 'student' => $model->student]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreate0($thesis)
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post())) {
            $model->setData();
            if ($model->save()) {
                return $this->redirect(['view', 'thesis' => $model->thesis, 'student' => $model->student]);
            }
        }

        return $this->render('create0', [
            'model' => $model,
            'thesis' => $thesis,
        ]);
    }
    /**
     * Updates an existing Request model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $thesis
     * @param integer $student
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($thesis, $student)
    {
        $model = $this->findModel($thesis, $student);
        $stud = User::findIdentity($student);
        $thesis = Thesis::findThesis($thesis);

        if ($model->load(Yii::$app->request->post())) {
               /*if (User::findByUsername($stud->username)){
                   $model->student(User::findByUsername($stud->username))->getId();*/
                   if($model->save()) {
                       return $this->redirect(['view', 'thesis' => $model->thesis, 'student' => $model->student]);
                   }
             //}
        }

        return $this->render('update', [
            'model' => $model,
            'stud' => $stud,
            'thesis' => $thesis,
        ]);
    }

    /**
     * Deletes an existing Request model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $thesis
     * @param integer $student
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($thesis, $student)
    {
        $this->findModel($thesis, $student)->softDelete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Request model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $thesis
     * @param integer $student
     * @return Request the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($thesis, $student)
    {
        if (($model = Request::findOne(['thesis' => $thesis, 'student' => $student])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
