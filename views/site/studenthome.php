<title>Islab | Student</title>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $student app\models\Student */
/* @var $courses app\models\CourseSite[] */
/* @var $allcourses app\models\CourseSite[] */
/* @var $model app\models\Registers */

$this->title = ('Home');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <p> Benvenuto
        <?= Yii::$app->user->identity->getName() ?> <?= Yii::$app->user->identity->getSurname() ?>,
        <?= Html::a('qui', ['/thesis/index'], ['data' => ['method' => 'post']]) ?>
        puoi richiedere una tesi.
    </p>
    <?php
        if($message=Yii::$app->session->getFlash('success'))
            Yii::$app->session->getFlash('success')
    ?>
    <h2 style="font-family: Optima">Corsi attivi</h2>
    <?php
    $form = ActiveForm::begin();
    if($allcourses){
        echo '
        <table class="uk-table">
            <tbody>
            <tr>
                <td><b>Titolo</b></td>
                <td><b>Edizione</b></td>
                <td><b>Data apertura</b></td>
                <td><b>Data chiusura</b></td>
                <td></td>
            </tr>
        ';
        foreach ($allcourses as $mycourse) {
            $subscribed=false;
            foreach ($courses as $course) {
                if ($mycourse->id==$course->id) {
                    $subscribed=true;
                }
            }
            if ($mycourse->is_current){
                echo '<tr>
                                <td>' . $mycourse->title . '</td>
                                <td>' . $mycourse->edition . '</td>
                                <td>' . $mycourse->opening_date . '</td>
                                <td>' . $mycourse->closing_date . '</td>
                                ';
                if ($subscribed)
                    echo '
                                        <td>' . Html::a('Vai al corso', ['/course', 'id' => $mycourse->course], ['class' => 'uk-button uk-button-primary']) . '</td>
                                        </tr>
                                    ';
                else
                    echo '
                                        <td>' . Html::submitButton('Iscriviti al corso', ['class' => 'uk-button uk-button-default', 'value'=> $mycourse->id, 'name'=>'submit']) . '</td>
                                        </tr>
                                    ';
            }
        }
        echo'
        
            </tbody>
        </table>
        ';
        $form = ActiveForm::end();
    }

    ?>
</div>
<?php
if(isset($_POST['submit']))
    echo 'insert in model->course_site submitted id';
?>
<?= Html::submitButton('Create & Add New', ['class' => 'btn btn-primary', 'value'=>'create_add', 'name'=>'submit']) ?>



