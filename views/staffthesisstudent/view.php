<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/staffnavbar.php');
$this->endContent();
?>
<div class="request-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'thesis' => $model->thesis, 'student' => $model->student], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'thesis' => $model->thesis, 'student' => $model->student], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'thesis0.title',
            'user.username',
            'title',
            'created_at:datetime',
            'confirmed_at:boolean',
        ],
    ]) ?>

</div>
