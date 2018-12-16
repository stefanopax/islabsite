<title>Islab | Corsi</title>
<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $dataProvider yii\data\ArrayDataProvider */
/* @var $model app\models\Course */
/* @var $edition app\models\CourseSite */
/* @var $pages app\models\Page[] */

$this->params['breadcrumbs'][] = $this->title;
?>
<?php

NavBar::begin();
$items = [];
foreach ($pages as $rows) {
    array_push($items, ['label' => $rows['title'], 'url' => 'course?id='.$model->id.'&page='.$rows['title'], 'linkOptions' => ['style' => 'color: orange;']]);
}

echo Nav::widget([
    'options' => ['class' => 'uk-navbar-item', 'style' => 'background-color: blue; color: orange'],
    'items' => $items,
]);
NavBar::end();

?>

<p><h2><center><?= Html::encode($model->title, $edition->edition) ?><center></h2></p>
<h4>
    <center>
        <h4><center>A.A. <?= Html::encode($edition->edition) ?> - <a href="<?= Url::to(['course/sites', 'id' => $model->id]); ?>">Edizioni precedenti</a><center></h4>

    <center>
</h4>

<?php

    if($get = Yii::$app->getRequest()->getQueryParam('page')){
        foreach ($pages as $rows) {
            if ($rows['title'] == $get) {
                if ($rows['is_public'])
                    echo $rows['content'];
                else {
                    if (Yii::$app->authManager->getRolesByUser(Yii::$app->user->id) != null)
                        echo $rows['content'];
                    else
                        echo '<h4>Non puoi accedere a questa pagina</h4>';
                }
            }
        }
    }

    else {
        foreach ($pages as $rows) {
            if ($rows['is_home'] == true)
                echo $rows['content'];
        }
    }
?>