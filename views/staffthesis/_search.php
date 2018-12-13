<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchThesisStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thesis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'company') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'requirements') ?>

    <?php // echo $form->field($model, 'course') ?>

    <?php // echo $form->field($model, 'n_person') ?>

    <?php // echo $form->field($model, 'ref_person') ?>

    <?php // echo $form->field($model, 'is_visible')->checkbox() ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
