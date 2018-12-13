<title>Islab | Basi di dati</title>
<?php

use yii\helpers\Html;

?>
<div class="site-index">
    <?php
    $this->title = ('Basi di dati  A.A. 2018-19 - Materiale didattico');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/dbnavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<h3 class="uk-text-center">Hai l'accesso per visualizzare la pagina</h3>


