<title>Islab | Edizioni precedenti</title>
<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $dataProvider yii\data\ArrayDataProvider */
/* @var $model app\models\Course */
/* @var $courses app\models\CourseSite[] */

$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Vecchi corsi qui:</h1>
<div>
    <table class="uk-table">
        <tbody>
        <tr>
            <td><b>Edizione</td>
            <td><b>Data apertura</b></td>
            <td><b>Data chiusura</b></td>
            <td></td>
        </tr>
        <?php

        foreach ($courses as $course) {
            echo '<tr>
                    <td>' . $course['edition'] . '</td>
                    <td>' . $course['opening_date'] . '</td>
                    <td>' . $course['closing_date'] . '</td>
                    <td><a class="uk-button uk-button-default" href="">Vai al corso</a></td>
                  </tr>
            ';
        }
        ?>
        </tbody>
    </table>
</div>

<br></br>

