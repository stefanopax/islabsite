<title>Islab | Corsi precedenti</title>
<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

/* @var $dataProvider yii\data\ArrayDataProvider */
/* @var $edition app\models\CourseSite */
/* @var $pages app\models\Page[] */

$this->params['breadcrumbs'][] = $this->title;
?>
<?php

NavBar::begin();
$items = [];
foreach ($pages as $rows) {
    array_push($items, ['label' => $rows['title'], 'url' => 'course?id='.$edition->course.'&page='.$rows['title'], 'linkOptions' => ['style' => 'color: orange;']]);
}

echo Nav::widget([
    'options' => ['class' => 'uk-navbar-item', 'style' => 'background-color: blue; color: orange'],
    'items' => $items,
]);
NavBar::end();

?>

<p><h2><center><?= Html::encode($edition->title, $edition->edition) ?><center></h2></p>


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