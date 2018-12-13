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
				['label' => 'Student', 'url' => ['/adminstudent']],
				['label' => 'Teacher', 'url' => ['/adminteacher']],
				['label' => 'Staff', 'url' => ['/adminstaff']],
				['label' => 'Project', 'url' => ['/adminproject']],
				['label' => 'Thesis', 'url' => ['/adminthesis']],				
			],
	]);
	NavBar::end();
		
?>	
