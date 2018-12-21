<title>Islab | Teacher</title>
<?php

use yii\helpers\Html;

$this->title = ('Home');
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/teachernavbar.php');
$this->endContent();
?>

<h1><?= Html::encode($this->title) ?></h1>

<p> Benvenuto <?= Yii::$app->user->identity->getName() ?> <?= Yii::$app->user->identity->getSurname() ?>  </p>
 <?php /*Html::a('CREATE COURSE', ['course/page', 'course' => 1], ['data' => ['method' => 'post']]);*/ ?>
