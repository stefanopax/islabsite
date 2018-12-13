<?php

use yii\db\Migration;

/**
 * Class m181025_100824_create_role
 */
class m181025_100824_create_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    
     public function up()
    {
		$this->createTable('role', [
			'id' => $this->primaryKey(),
			'description'=> $this->string(20),
		]);
    }

    public function down()
    {
        $this->dropTable('role');
	}
    
}
