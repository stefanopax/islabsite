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
                ['label' => 'HomePage', 'url' => ['/db/index'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Materiale Didattico', 'url' => ['/db/material'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Modalità di Esame', 'url' => ['/db/exam'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Progetto', 'url' => ['/db/project'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Programma', 'url' => ['/db/program'], 'linkOptions' => ['style' => 'color: orange;']],
                ['label' => 'Appelli', 'url' => ['/db/examdate'], 'linkOptions' => ['style' => 'color: orange;']],
            ],
    ]);
    NavBar::end();

?>