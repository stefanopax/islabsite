<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Course;


/* @var $this yii\web\View */
/* @var $model app\models\CourseSite */

$this->title = 'Create Course Site';
$this->params['breadcrumbs'][] = ['label' => 'Course Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-site-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course')->dropDownList(ArrayHelper::map(Course::find()->leftjoin('handles', 'id::integer=course::integer')
        ->where(['handles.staff' => Yii::$app->user->identity->getId()])->all(), 'id', 'title'));?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
