<title>Islab | Student</title>
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;

$this->title = ('Home');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p> Benvenuto <?= Yii::$app->user->identity->getName() ?> <?= Yii::$app->user->identity->getSurname() ?> </p>
    <?= Html::a('Request Thesis', ['/thesis/index'], ['data' => ['method' => 'post']]) ?>


</div>

