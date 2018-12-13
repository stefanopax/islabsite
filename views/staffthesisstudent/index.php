<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchRequest */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ThesisStudent';
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/staffnavbar.php');
$this->endContent();
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create A Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        //'tableOptions'=> ['class' => 'uk-table uk-table-striped uk-table-divider uk-table-middle uk-text-center my-table uk-table-responsive'],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'name',
                'value' => 'user.name',
            ],
            ['attribute'=>'surname',
                'value' => 'user.surname',
            ],
            ['attribute'=>'thesis',
                'value' => 'thesis0.title',
            ],
            'title',
            //'created_at',
            'confirmed_at:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
