<?php

use yii\db\Migration;

/**
 * Class m181025_134518_create_thesis
 */
class m181025_134518_create_thesis extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('thesis', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20)->notNull(),
            'company' => $this->string(20),
            'description' => $this->text()->notNull(),
            'duration' => $this->string(100)->notNull(),
            'requirements' => $this->string(40),
            'course' => $this->string(30)->notNull(),
            'n_person' => $this->integer()->notNull(),
            'ref_person' => $this->string(30),
            'is_visible' => $this->boolean()->defaultValue('true'),
            'created_at' => $this->integer()->notNull(),
			'trien' => $this->boolean()->notNull(),
			'staff' => $this->integer()->notNull(),
        ]);

        /* insert for testing*/
		$this->createIndex('idx-thesis-id','thesis','id');
        $this->addForeignKey('fk-thesis-staff','thesis','staff','staff','id','CASCADE','CASCADE');
    }

    public function down()
    {
		$this->dropForeignKey('fk-thesis-staff','thesis');
        $this->dropIndex('idx-thesis-id','thesis');
		
        $this->delete('thesis');
        $this->dropTable('thesis');
    }
}
