<title>Islab | Basi di dati</title>
<?php

use yii\helpers\Html;

?>
<div class="site-index">
    <?php
    $this->title = ('Basi di dati  A.A. 2018-19 - Progetto');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/layouts/dbnavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<div class="text">
    <p>
        La traccia del progetto per l'Anno Accademico 2018-19 è disponibile nella sezione del materiale didattico (è necessaria la registrazione al corso per accedere) e sarà valida per la consegna negli appelli da gennaio 2019 a gennaio 2020 inclusi.
    </p>
    <h2 style="color: orange">Modalità di consegna</h2>
    È possibile consegnare il progetto ad ogni appello d'esame, entro il giorno previsto per l'appello stesso. Di norma, la procedura di consegna è aperta dall'inizio del mese in cui si svolge l'appello (circa 2-3 settimane prima del giorno dell'appello).
    La consegna prevede due passaggi (entrambi obbligatori per partecipare alla correzione):<br></br>
    <ul class="uk-list uk-list-bullet">
        <li>Consegna in forma elettronica mediante i seguenti passaggi:</li>
        Produrre un archivio compresso contenente tutto il materiale del progetto. Si noti che solo i formati ZIP, RAR, TAR, GZ e TGZ sono ammessi.
        Denominare l'archivio come segue: BDLAB_matricola_nomecognome. Se il progetto è presentato in gruppo è necessario denominare il file con i dati dello studente con il primo cognome in ordine alfabetico.
        Accedere al sito del corso mediante il pulsante di login (in alto a sinistra) e le credenziali di ateneo.
        Nel menù sulla destra, selezionare la voce "Esami" e "Nuove iscrizioni", quindi scegliere l'appello nel quale si intende presentare e discutere il progetto.
        Caricare l'archivio contenente il materiale per perfezionare l'iscrizione. Nota per i gruppi: Il caricamento dell'archivio deve essere effettuato dallo studente con il primo cognome in ordine alfabetico. L'altro membro del gruppo deve comunque iscriversi all'appello accedendo al sito del corso mediante le proprie credenziali di ateneo. Dopo aver selezionato la voce "Esami" e "Nuove iscrizioni" nel menù sulla destra, sarà necessario utilizzare la funzionalità "aggiungiti ad un gruppo già esistente" e inserire la matricola del compagno che ha precedentemente caricato l'archivio contenente il materiale del progetto.
        <li>Consegna in forma cartacea mediante una delle seguenti modalità (vedere le modalità di consegna allegate alla traccia del progetto per sapere cosa è necessario consegnare in forma cartacea):</li>
        Consegna in forma cartacea mediante una delle seguenti modalità (vedere le modalità di consegna allegate alla traccia del progetto per sapere cosa è necessario consegnare in forma cartacea):
        Consegna durante l'appello dei presenti all'inizio della prova d'esame scritta.
        Consegna durante l’orario di ricevimento di uno dei responsabili del laboratorio (Prof. Frasca e Prof. Montanelli). Si veda la home page del sito del corso per date e orari degli orari di ricevimento.
        Nei giorni successivi ad ogni appello, nelle ultime notizie sul sito del corso, sarà pubblicato un calendario di discussione dei progetti consegnati. Di norma la correzione avviene entro due settimane dalla data dell'appello.
    </ul>
</div>


