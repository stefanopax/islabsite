<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Menuentry */

$this->title = 'Create Menuentry';
$this->params['breadcrumbs'][] = ['label' => 'Menuentries', 'url' => ['index']];
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
<div class="menuentry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
