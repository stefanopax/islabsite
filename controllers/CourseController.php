<?php

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Course;
use app\models\CourseSite;
use app\models\Page;
use yii\data\ArrayDataProvider;

class CourseController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'page'],
                        'allow' => true,
                        'roles' => ['@'],                                // @ tutti i ruoli
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
     * Lists all project models.
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionIndex($id)
    {
        $edition=CourseSite:: findCurrentCourseSite($id);
        return $this->render('index', [
            'model' => $this->findModel($id),
            'edition' => $edition,
            'pages' => $edition->getPages()->all()
        ]);
    }

    public function actionPage($course)
    {
        return true;
    }

    protected function findModel($id)
    {
        if (($model = Course::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}