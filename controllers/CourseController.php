<?php /** @noinspection ALL */

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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Display the course pages.
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionIndex($id)
    {
        $edition = CourseSite:: findCurrentCourseSite($id);
        return $this->render('index', [
            'model' => $this->findModel($id),
            'edition' => $edition,
            'pages' => $edition->getPages()->all()
        ]);
    }

    /**
     * Lists all past Course Sites.
     * @return mixed
     */
    public function actionSites($id)
    {
        $model = $this->findModel($id);
        return $this->render('sites', [
            'model' => $model,
            'courses' => $model->getCourseSites()->all()
        ]);
    }

    /**
     * Display the past course page.
     * @return mixed
     */
    public function actionPastcourse($id, $course)
    {
        $model = $this->findModel($id);
        $edition = CourseSite::findIdentity($course);
        return $this->render('pastcourse', [
            'model' => $model,
            'edition' => $edition,
            'pages' => $edition->getPages()
        ]);
    }

    /**
     * Return the model associated to the Course with specific id.
     * @return mixed
     */
    protected function findModel($id)
    {
        if (($model = Course::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}