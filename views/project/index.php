<title>Islab | Progetti</title>
<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeachProject */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

  <?= ListView::widget([
      'dataProvider' => $dataProvider,
      'itemView' => '_ui-card',
      'layout' => '{items}{pager}',
      'viewParams' => [
         'fullView' => true,
         'context' => 'main-page',
      ],
  ]);
  ?>
</div>
