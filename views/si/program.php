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
    $this->title = ('Sistemi Informativi  A.A. 2018-19 - Programma');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/sinavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<hr class="uk-grid-divider">
    <div class="itp_rest uk-grid uk-grid-divider">
        <div class="itp_middle uk-width-1-1 uk-width-medium-3-5">
            <div class="itp_section-1">
                <div class="text">
                    <p>
                        Il programma d'esame è disponibile per il download:
                    </p>
                    <p>
                        <a href="http://islab.di.unimi.it/?option=com_islabteachpages&view=download&fileid=222">programma dettagliato</a>
                    </p>
                    <h2 style="color: orange">Testi di riferimento</h2>
                    <ul class="uk-list uk-list-bullet">
                        <li>G. Bracchi, C. Francalanci, G. Motta
                            <br></br>
                            <i>Sistemi Informativi d’impresa</i>
                            McGraw-Hill, 2010.
                        </li>
                        <li>M. Golfarelli, S. Rizzi.
                            <br></br>
                            <i>Data Warehouse - Teoria e pratica della progettazione (2 ed.)</i>
                            McGraw-Hill, 2006.
                        </li>
                        <li>Materiale didattico integrativo disponibile sul sito web del corso
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<hr />