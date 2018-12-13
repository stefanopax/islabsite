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
    $this->title = ('Basi di dati  A.A. 2018-19 - Home page');
    $this->params['breadcrumbs'][] = $this->title;
    $this->beginContent('@app/views/course/coursenavbar.php');
    $this->endContent(); ?>
</div>

<p><h2><center><?= Html::encode($this->title) ?><center></h2></p>

<hr class="uk-grid-divider">
    <div class="itp_rest uk-grid uk-grid-divider">
        <div class="itp_middle uk-width-1-1 uk-width-medium-3-5">
            <div class="itp_section-1 ">
                Il corso si propone di fornire i concetti e le metodologie fondamentali relativamente alle basi di dati e ai sistemi per la loro gestione, con particolare riguardo ai sistemi di basi di dati relazionali.<br></br>
                È prevista una parte di laboratorio dedicata all'acquisizione e uso dei principali strumenti di gestione e progettazione di basi di dati relazionali e una parte dedicata alle principali tecnologie di basi di dati e Web.
                <br></br>
                Il corso si svolge nel primo semestre.
                    <h2 style="color: orange">Orari e luogo delle lezioni</h2>
                    Lunedì 15.30-18.30 aula V3, Via Venezian 15<br></br>
                    Martedì 15.30-18.30 aula G21, Via Golgi 19<br></br>
                    Giovedì 14.30-18.30 - lezione di laboratorio, aule Sigma e Tau, via Comelico, 39<br></br>
                    <br></br>
                <b>Le lezioni di laboratorio hanno inizio alle ore 15</b> e si svolgono in parallelo nelle aule Sigma e Tau. Per questioni organizzative, si tenga presente la seguente suddivisione indicativa degli studenti nelle due aule:<br></br>
                    <b>aula Sigma: studenti A-L<br></br></b>
                    <b>aula Tau: studenti M-Z<br></br></b>
                    <h2 style="color: orange">Orario di ricevimento</h2>
                    <b style="color:orange">Alfio Ferrara</b><br></br>
                    Venerdì 11.30-13.30 - stanza 7012 (7 piano)<br></br>
                    <b style="color:orange">Stefano Montanelli</b> (laboratorio e gestione progetti)<br></br>
                    Giovedì 11-12 - stanza 7015 (7 piano)<br></br>
                    <b style="color:orange">Marco Frasca</b> (laboratorio e gestione progetti)<br></br>
                    Martedì 15-16 - stanza 3021 (3 piano)<br></br>
                    Le eventuali modifiche all'orario di ricevimento saranno pubblicate su questo sito.<br></br>
                    Vedere le comunicazioni nelle ultime notizie (in alto a destra della pagina).<br></br>
                </div>
            </div>
        </div>
    </div>
</hr>
<br></br>



