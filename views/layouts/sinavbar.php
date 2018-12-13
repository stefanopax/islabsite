<?php

use backend\models\Standard;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php
    NavBar::begin();
    echo Nav::widget([
            'options' => ['class' => 'uk-navbar-item', 'style' => 'background-color: blue; color: orange'],
            'items' => [
                ['label' => 'HomePage', 'url' => ['/si/index'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Materiale Didattico', 'url' => ['/si/material'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Modalità di Esame', 'url' => ['/si/exam'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Programma', 'url' => ['/si/program'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Appelli', 'url' => ['/si/examdate'], 'linkOptions' => ['style' => 'color: orange;']],
            ],
    ]);
    NavBar::end();

?>