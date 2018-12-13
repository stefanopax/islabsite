<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model app\models\Request */

$this->title = 'Create Request';
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->beginContent('@app/views/layouts/staffnavbar.php');
$this->endContent();
?>
<div class="request-create">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_formcreate', [
        'model' => $model,
    ]) ?>

</div>
