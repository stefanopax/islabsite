<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Menuentry */

$this->title = 'Update Menuentry: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menuentries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
$role = Yii::$app->authManager->getRolesByUser(\Yii::$app->user->identity->id);
if(isset($role['admin'])){
	$this->beginContent('@app/views/layouts/adminnavbar.php');
	}
else{
	$this->beginContent('@app/views/layouts/staffnavbar.php');
	}
$this->endContent();
?>
<div class="menuentry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
