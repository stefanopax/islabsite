<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCourseSite */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Course Sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-site-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Course Site', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'edition',
            'opening_date',
            'closing_date',
            //'css:ntext',
            'is_current:boolean',
            //'course',

            ['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{link}',
                'buttons' => [
                    'link' => function ($url,$model,$key) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',  ['pages/index', 'coursesite' => $model->id]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
