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
    $this->title = ('Basi di dati  A.A. 2018-19 - Programma');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/dbnavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<hr class="uk-grid-divider">
    <div class="itp_rest uk-grid uk-grid-divider">
        <div class="itp_middle uk-width-1-1 uk-width-medium-3-5">
                <br class="text">
                    I temi trattati nel corso sono:
                    <ul class="uk-list uk-list-bullet">
                        <li>Concetti e architettura di un sistema di basi di dati</li>
                        <li>Modello relazionale, vincoli, normalizzazione</li>
                        <li>Modellazione dei dati, modello ER e nozioni di progettazione</li>
                        <li>Progettazione logica</li>
                        <li>Algebra relazionale</li>
                        <li>SQL</li>
                        <li>Organizzazione fisica dei dati e indici</li>
                        <li>Sicurezza e controllo dell'accesso</li>
                        <li>Transazioni (concetti generali)</li>
                    </ul>
                    <ul class="uk-list uk-list-bullet">
                    I temi trattati nel laboratorio sono:
                        <li>Il DBMS PostgreSQL</li>
                    Creazione e manipolazione di schemi
                    Gestione di utenti e ruoli
                    Firewall degli accessi (hba.conf)
                    Dump di basi di dati
                    Linguaggio procedurale (PLpgSQL)
                        <li>Programmazione web con PHP</li>
                    Architettura client/server
                    Protocollo HTTP
                    Passaggio di parametri GET/POST
                    Cookie/sessioni
                    Interazione con i DBMS
                    Esercitazioni
                    </ul>
                    È inoltre disponibile il programma dettagliato.

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
                    <h2 style="color: orange">Bibliografia del corso</h2>
                    Il corso è costruito a partire da due testi di riferimento:
                    R. Elmasri, S.B. Navathe
                    Sistemi di basi di dati - Fondamenti (6 ed.)
                    edizione italiana a cura di Silvana Castano
                    Pearson-Addison Wesley, 2011.
                    <br></br>
                    P.Atzeni, S. Ceri, S. Paraboschi, R. Torlone
                    Basi di dati - Modelli e linguaggi di interrogazione (2 ed.)
                    McGraw-Hill, 2006.
                    <br></br>
                    Sono inoltre disponibili altri materiali didattici, dispense e contenuti di laboratorio (previa iscrizione al corso tramite il sito).
                    <br></br>
                    <b>Altri testi utili:</b><br></br>
                    S. Castano, M. Fugini, G. Martella, P. Samarati
                    Database Security
                    Addison-Wesley, 1995.
                    <h2 style="color: orange">Bibliografia del laboatorio</h2>
                    Gli strumenti impiegati nel laboratorio sono PostgreSQL e PHP.
                    I manuali ufficiali degli strumenti (consultabili online) sono una risorsa importante e utile. Ulteriori fonti per la risoluzione di problematiche specifiche possono essere reperite via web tramite motore di ricerca. Coloro che intendono approfondire i temi del laboratorio e l'uso dei relativi strumenti possono fare riferimento ai testi consigliati.
                    <br></br>
                    Materiale online:
                    PostgreSQL - manuale ufficiale
                    PHP - manuale ufficiale
                    <br></br>
                    Testi consigliati:
                    H.Krosing, J. Mlodgenski, K. Roybal
                    PostgreSQL: Programmazione Avanzata
                    Apogeo, 2013.
                    <br></br>
                    Regina Obe, Leo Hsu
                    PostgreSQL: Up and Running
                    O'Reilly, 2012.
                    <br></br>
                    L. Ullman
                    PHP for the Web (4th Edition)
                    Peachpit Press, 2011.
                    <br></br>
                    A. Gutmans, S. Bakken, D. Rethans
                    PHP 5 - Guida Completa
                    Apogeo, 2005.
                </div>
            </div>
        </div>
    </div>
<hr />