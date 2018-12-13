<?php

use backend\models\Standard;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php	
	NavBar::begin();
	echo Nav::widget([
			'options' => ['class' => 'uk-navbar-item'],
			'items' => [
				['label' => 'Personal', 'url' => ['/adminstaff/view', 'id' => Yii::$app->user->identity->getId()]],
				['label' => 'Personal Menu', 'url' => ['/staffmenuentry', 'id' => Yii::$app->user->identity->getId()]],
				['label' => 'Thesis', 'url' => ['/staffthesis']],
				['label' => 'Thesis Student', 'url' => ['/staffthesisstudent']],				
			],
	]);
	NavBar::end();
		
?>	