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
    $this->title = ('Sistemi Informativi  A.A. 2018-19 - Home page');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/sinavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<hr class="uk-grid-divider">
    <div class="itp_rest uk-grid uk-grid-divider">
        <div class="itp_middle uk-width-1-1 uk-width-medium-3-5">
            <div class="itp_section-1 ">
                <div class="text">
                    Il corso ha come obiettivo l'acquisizione delle conoscenze di base dei Sistemi Informativi aziendali, con riferimento a modelli e architetture dei processi nei sistemi di front-end (e.g., Customer Relationship Management system- CRM), di back-end (e.g., Enterprise Resource Planning systems -ERP) e nei sistemi di governance (e.g., Business Intelligence- BI). Il corso approfondisce in particolare gli aspetti metodologici relativi all'analisi e progettazione di datawarehouse. Sono infine discussi nuovi requisiti e opportunità derivanti dai big data.<br />
                    Il corso si svolge nel primo semestre.
                    <h2 style="color: orange">Orari e luogo delle lezioni</h2>
                        Luned&igrave; 13.30-17.30 aula magna "Alberto Bertoni", via Celoria, 18
                    <h2 style="color: orange">Orario di ricevimento</h2>
                    <a href="mailto:silvana.castano@unimi.it" style="color: orange"><b>Prof.ssa Silvana Castano</b></a>
                    <br></br>
                    Su appuntamento via email
                </div>
            </div>
        </div>
    </div>
</hr>
<br></br>



