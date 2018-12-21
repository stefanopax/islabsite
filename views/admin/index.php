<title>Islab | Admin</title>
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

$this->title = ('Home');
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/adminnavbar.php');
$this->endContent(); ?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

	<p> Benvenuto <?= Yii::$app->user->identity->getName() ?> <?= Yii::$app->user->identity->getSurname() ?> </p>

</div>



