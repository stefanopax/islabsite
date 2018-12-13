<title>Islab | Sistemi Informativi</title>
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;

use yii\helpers\ArrayHelper;
use backend\models\Standard;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<div class="site-index">
    <?php
    $this->title = ('Sistemi Informativi  A.A. 2018-19 - Materiale didattico');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/sinavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<h3 class="uk-text-center">Hai l'accesso per visualizzare la pagina</h3>


