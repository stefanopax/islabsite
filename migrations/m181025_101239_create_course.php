<?php

use yii\db\Migration;

/**
 * Class m181025_101239_create_course
 */
class m181025_101239_create_course extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
    {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20)->notNull(),
            'is_active' => $this->boolean()
        ]);

        /* insert for testing*/
        $this->insert('course',[
            'id' => '1',
            'title' => 'Basi di dati'
            //'is_active' => true
        ]);
        $this->insert('course',[
            'id' => '2',
            'title' => 'Sistemi informativi',
        ]);
    }

    public function down()
    {
        $this->delete('course');
        $this->dropTable('course');
    }
}
