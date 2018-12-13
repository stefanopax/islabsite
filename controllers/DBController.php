<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class DbController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['material'],
                'rules' => [
                    [
                        'actions' => ['material'],
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
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Lists all project models.
     * @return mixed
     */
    public function actionMaterial()
    {
        return $this->render('material');
    }

    /**
     * Lists all project models.
     * @return mixed
     */
    public function actionExam()
    {
        return $this->render('exam');
    }

    /**
     * Lists all project models.
     * @return mixed
     */
    public function actionProgram()
    {
        return $this->render('program');
    }

    /**
     * Lists all project models.
     * @return mixed
     */
    public function actionExamdate()
    {
        return $this->render('examdate');
    }

    /**
     * Lists all project models.
     * @return mixed
     */
    public function actionProject()
    {
        return $this->render('project');
    }
}