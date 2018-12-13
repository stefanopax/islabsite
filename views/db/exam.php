<title>Islab | Basi di dati</title>
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
    $this->title = ('Basi di dati  A.A. 2018-19 - Modalità di esame');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/dbnavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<hr class="uk-grid-divider">
    <div class="itp_rest uk-grid uk-grid-divider">
        <div class="itp_middle uk-width-1-1 uk-width-medium-3-5">
            <div class="itp_section-1">
                <div class="text">
                    <p>
                        L'esame consiste in una prova scritta, un progetto di laboratorio e una discussione orale (solo se necessaria secondo il regolamento che segue).
                        <br></br>
                        <b>Prova scritta</b>
                        E' composta da una parte A con domande di teoria e da una parte B con esercizi. La prova scritta è valutata in trentesimi (voto S).
                        <br></br>
                        <b>Progetto di laboratorio</b>
                        È obbligatorio e può essere svolto in gruppi composti da un <b>massimo di 2 studenti</b>. Per dettagli sulle modalità di consegna e per le specifiche tecniche del progetto si veda la sezione Progetti. Il progetto di laboratorio è valutato in trentesimi (voto P).
                        <br></br>
                        <b>Discussione orale</b>
                        Dopo aver sostenuto la prova scritta e il progetto di laboratorio, lo studente riceve un voto in trentesimi corrispondente alla media pesata delle due prove sostenute così calcolata:
                        <br></br>
                        voto=(2S+P)/3<br></br>
                        Se si è conseguito un voto di almeno 25/30 in entrambe le prove (S>=25 e P>=25): la discussione orale è possibile. Se non si sostiene la discussione orale, il voto comprensivo della prova scritta e del progetto di laboratorio è automaticamente confermato.
                        Se NON si è conseguito un voto di almeno 25/30 in ciascuna delle due prove (S<25 o P<25) la discussione orale <b>non è possibile</b>. Il voto comprensivo della prova scritta e del progetto di laboratorio è automaticamente confermato.
                    </p>
                    <h2 style="color: orange">Iscrizione all'esame e validità delle prove</h2>
                     <div class="text">
                         Si ricorda che l'iscrizione SIFA all'appello d'esame è <b>obbligatoria e SEMPRE necessaria</b> ogni volta che si deve sostenere la prova scritta.
                         Non è necessaria iscrizione via SIFA per la consegna del progetto.
                         <br></br>
                         Lo studente può sostenere la prova scritta e il progetto di laboratorio nell'ordine che preferisce. Tra le due prove, non dovrà trascorrere un periodo di tempo superiore ad un anno, pena l'annullamento del voto della prova già sostenuta.
                         <br></br>
                         <b>Avviso importante</b><br></br>
                         Il voto della prova scritta (se diverso da "insufficiente") resta congelato fino al conseguimento del voto della prova di progetto. Sarà quindi possibile accettare/rifiutare solamente il voto finale, comprensivo di entrambe le prove.
                    </div>
                </div>
            </div>
        </div>
    </div>
</hr>
<br></br>


