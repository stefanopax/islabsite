<?php

namespace app\controllers;

use Yii;
use app\models\project;
use app\models\SearchProject;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectController implements the CRUD actions for project model.
 */
class ProjectController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all project models.
     * @return mixed
     */
    public function actionIndex()
    {
		//if (\Yii::$app->user->can('view')){
			$searchModel = new SearchProject();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
			
			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
		//}
    }

    /**
     * Displays a single project model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
}