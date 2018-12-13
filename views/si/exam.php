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
    $this->title = ('Sistemi Informativi  A.A. 2018-19 - Modalità di esame');
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
                    L'esame si compone di una prova scritta (domande di teoria e svolgimento di esercizi) sugli argomenti oggetto del programma d'esame.
                    <br></br>
                    Per sostenere l'esame ad un certo appello lo studente DEVE essere iscritto via SIFA all'appello in questione. Non saranno ammessi in aula studenti non iscritti via SIFA all'appello.
                    Lo studente che, per vari motivi, si fosse iscritto all'appello e non potesse più sostenere l'esame per impedimenti sopraggiunti, è invitato a cancellare la propria iscrizione dal SIFA (se ancora possibile) e IN OGNI CASO a comunicare via email l'assenza alla prof.ssa Castano almeno un giorno prima dell'esame.
                    <br></br>
                    <b>Per studenti frequentanti:</b> le modalità sono comunicate esclusivamente a lezione.
                    <br></br>
                    <b>Per studenti non frequentanti:</b> svolgimento di una prova scritta su tutti gli argomenti oggetto del programma d'esame.
                    </p>
                    <h2 style="color: orange">Accesso al materiale didattico</h2>
                     <div class="text">
                         Per accedere al materiale didattico è necessario essere registrati al corso. È previsto un periodo di registrazione aperto agli studenti, che viene comunicato a lezione dal docente all'inizio del corso. Gli studenti che si registrano in tale periodo e frequentano le lezioni potranno sostenere l'esame per studenti frequentanti.
                         Gli studenti che volessero avere accesso al materiale didattico e che non avessero effettuato la registrazione nei termini previsti sosterranno l'esame come non frequentanti. Essi potranno fare richiesta di accesso al materiale didattico via email alla prof.ssa Castano. L'accesso al metariale sarà comunque possibile a partire dalla fine del corso.
                    </div>
                </div>
            </div>
        </div>
    </div>
</hr>
<br></br>


