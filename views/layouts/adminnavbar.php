<?php

use backend\models\Standard;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php
	NavBar::begin([
		'options' => [
			'class' => 'uk-navbar',
			'role' => 'navigation',
			'style' => 'background-color: #CBCACA; color: blue; height: 80px',
			'innerContainerOptions' => ['class' => 'container-fluid'],
		]
	]);
	echo Nav::widget([
			'options' => ['class' => 'uk-navbar-item'],
			'items' => [
				['label' => 'Student', 'url' => ['/adminstudent']],
				['label' => 'Teacher', 'url' => ['/adminteacher']],
				['label' => 'Staff', 'url' => ['/adminstaff']],
				['label' => 'Project', 'url' => ['/adminproject']],
				['label' => 'Thesis', 'url' => ['/adminthesis']],				
			],
	]);
	NavBar::end();
		
?>	
