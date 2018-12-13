<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Thesis;
use app\models\User;


/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'thesis')->textInput(['readonly' => true, 'value' => $thesis ]) ?>

    <?= $form->field($model, 'student')->dropDownList(ArrayHelper::map(User::find()->leftjoin('auth_assignment', 'id::integer=user_id::integer')->where(['item_name' => 'student'])->all(), 'id', 'username')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmed_at')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
