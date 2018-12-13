<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CourseSite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-site-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'opening_date')->textInput() ?>

    <?= $form->field($model, 'closing_date')->textInput() ?>

    <?= $form->field($model, 'css')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_current')->checkbox() ?>

    <?= $form->field($model, 'course')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
