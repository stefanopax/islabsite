<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchThesisAdmin */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Theses';
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/adminnavbar.php');
$this->endContent(); 
?>
<div class="thesis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Thesis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'company',
            'description:ntext',
            'duration',
            //'requirements',
            //'course',
            'n_person',
            'ref_person',
            'is_visible:boolean',
            'trien:boolean',
            //'created_at',
            //'staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
