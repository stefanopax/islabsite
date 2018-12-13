<?php

use yii\db\Migration;

/**
 * Class m181025_150643_create_handles
 */
class m181025_150643_create_handles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('handles', [
            'staff' => $this->integer()->notNull(),
            'course' => $this->integer()->notNull()
        ]);

        //creating primary key
        $this->addPrimaryKey('pk-handles','handles',['staff','course']);

        $this->addForeignKey('fk-handles-staff','handles','staff','staff','id','CASCADE','CASCADE');
        $this->addForeignKey('fk-handles-course','handles','course','course','id','CASCADE','CASCADE');

        /* insert for testing*/
    }

    public function down()
    {
        $this->dropPrimaryKey('pk-handles','handles');

        $this->dropForeignKey('fk-handles-course','handles');
        $this->dropForeignKey('fk-handles-staff','handles');

        $this->delete('handles');
        $this->dropTable('handles');
    }
}
