<title>Islab | Student</title>
<?php

use yii\helpers\Html;

/* @var $student app\models\Student */
/* @var $courses app\models\CourseSite[] */
/* @var $allcourses app\models\CourseSite[] */

$this->title = ('Home');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p> Benvenuto <?= Yii::$app->user->identity->getName() ?> <?= Yii::$app->user->identity->getSurname() ?> </p>
    <?= Html::a('Richiedi Tesi', ['/thesis/index'], ['data' => ['method' => 'post']]) ?>
    <div>
        <table class="uk-table">
            <tbody>
            <tr>
                <td><b>Titolo</b></td>
                <td><b>Edizione</b></td>
                <td><b>Data apertura</b></td>
                <td><b>Data chiusura</b></td>
                <td></td>
            </tr>
            <?php

            foreach ($courses as $course) {
                if($course->is_current) {
                    echo '<tr>
                            <td>' . $course->title . '</td>
                            <td>' . $course->edition . '</td>
                            <td>' . $course->opening_date . '</td>
                            <td>' . $course->closing_date . '</td>
                            <td><button class="uk-button uk-button-primary" name="btn">Vai al corso</button></td>
                          </tr>
                    ';
                }
            }

            ?>
            </tbody>
        </table>
    </div>
    
    <?php
        foreach ($allcourses as $mycourse)
            $mycourse->title;
    ?>
</div>

