<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchStaff */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/adminnavbar.php');
$this->endContent(); 
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'password',
            //'authkey',
            'name',
            'surname',
            'is_disabled:boolean',
	
            ['class' => 'yii\grid\ActionColumn' ],
			
			[
            'class' => 'yii\grid\ActionColumn',
            'template' => '{link}',
            'buttons' => [
                'link' => function ($url,$model,$key) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>',  ['staffmenuentry/index', 'id' => $model->id]);
					},
				],
			],
        ],
    ]); ?>
</div>
