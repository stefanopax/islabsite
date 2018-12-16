<?php

namespace app\controllers;

use Yii;
use app\models\Menuentry;
use yii\db\Exception;
use yii\filters\AccessControl;
use app\models\SearchMenuEntry;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//use richardfan\sortable\SortableAction;

class MenuentryController extends \yii\web\Controller
{
	/*public function actions(){
    return [
        'sortItem' => [
            'class' => SortableAction::className(),
            'activeRecordClassName' => Menuentry::className(),
            'orderColumn' => 'position',
        ],
        // your other actions
    ];
}*/

    public function actionIndex($id)
    {
		/*$searchModel = new SearchMenuEntry();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
		return $this->render('index',[
		      'model' => Menuentry::findMenuentry($id),
    ]);
    }

    public function actionChangesort()
    {
        try{
        $request = Yii::$app->request;
        //return var_dump($request->post());
        $ar=$request->post("item");
        if ($ar)
        {
                $position = 0;
                foreach ($ar as $menu) {
                        $model = Menuentry::findIdentity($menu);
                        $model->setPosition($position);
                        if($model->save()){
                            echo $menu;
                        }else{
                            return "no";
                        }
                    $position++;
                }
        }
        else{
            return "Error";
        }}catch (\Error $exception){
            return var_dump($exception);
        }

    }

}