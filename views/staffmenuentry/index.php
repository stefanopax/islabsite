<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMenuEntry */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menuentries';
$this->params['breadcrumbs'][] = $this->title;
$role = Yii::$app->authManager->getRolesByUser(\Yii::$app->user->identity->id);
if(isset($role['admin'])){
	$this->beginContent('@app/views/layouts/adminnavbar.php');
	}
else{
	$this->beginContent('@app/views/layouts/staffnavbar.php');
	}
$this->endContent();
?>
<div class="menuentry-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menuentry', ['create'], ['class' => 'btn btn-success']) ?>
		<?php if(isset($role['staff'])) { ?>
			<?= Html::a('Order Menuentry', ['/menuentry', 'id' => Yii::$app->user->identity->id], ['class' => 'btn btn-success']) ?>
			<?php	} ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'link',
            'content',
            'position',
            'is_deleted:boolean',
            //'staff_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
