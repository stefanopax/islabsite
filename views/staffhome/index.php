<title>Islab | Staff</title>
<?php

use yii\helpers\Html;

$this->title = ('Home');
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/staffnavbar.php');
$this->endContent(); ?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

	<p> Benvenuto <?= Yii::$app->user->identity->getName() ?> <?= Yii::$app->user->identity->getSurname() ?> </p>

</div>



