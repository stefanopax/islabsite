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
    ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<div class="uk-grid">
    <div class="uk-width-2-3">
        <div class="itp_middle uk-width-1-1 uk-width-medium-3-5">
            <div class="itp_section-1 ">
                <div class="text">
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
    <div class="uk-width-1-3">
        <div class="text">
            <h4>Ultime notizie	RSS feed</h4>
            <b>Progetti di laboratorio - consegna materiale cartaceo</b>
            <br>
            A partire dall’appello di settembre 2018, la consegna del materiale cartaceo del progetto di laboratorio deve avvenire con una delle seguenti modalità:
            <ul>
                <li>
                    consegna brevi manu a uno dei responsabili del laboratorio (Marco Frasca o Stefano Montanelli) durante l’orario di ricevimento (si veda la home page del sito del corso per date e orari)
                </li>
                <li>
                    consegna a uno dei docenti presenti durante l’appello dei presenti all’inizio dell'esame scritto
                </li>
            </ul>
            <b>Registrazione al corso - importante</b>
            <br>
            Quando si effettua la registrazione al corso, è importante inserire anche il proprio numero di matricola.
            Coloro che sono si sono registrati senza indicare il numero di matricola, possono accedere al sito con le credenziali di ateneo e seguire il link sulla destra modifica e il tuo profilo.

            Gli avvisi sui siti Web si intendono aggiornati e gli studenti sono vivamente pregati di NON INVIARE email con richieste di conferma di date/orari.
            Precedente edizione del corso
            Le informazioni relative al corso dell'A.A. 2017-18 sono disponibili in archivio
        </div>
    </div>
</div>
<br></br>
