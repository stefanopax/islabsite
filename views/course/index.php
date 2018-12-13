<title>Islab | Course</title>
<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\grid\GridView;

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
    array_push($items, ['label' => $rows['title'], 'url' => '#', 'linkOptions' => ['style' => 'color: orange;']]);
}

echo Nav::widget([
    'options' => ['class' => 'uk-navbar-item', 'style' => 'background-color: blue; color: orange'],
    'items' => $items,
]);
NavBar::end();

?>

<p><h2><center><?= Html::encode($model->title) ?><center></h2></p>
<p><h4><center><?= Html::encode($edition->title) ?><center></h4></p>
    <?php

    foreach ($pages as $rows) {
        if($rows['is_home']==true)
            echo $rows['content'];
    }

    ?>
</p>