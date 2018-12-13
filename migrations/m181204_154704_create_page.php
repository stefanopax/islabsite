<?php

use yii\db\Migration;

/**
 * Class m181204_154704_create_page
 */
class m181204_154704_create_page extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('page', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30)->notNull(),
            'content' => $this->text(),
            'is_home' => $this->boolean(),
            'is_public' => $this->boolean(),
            'is_news' => $this->boolean(),
            'course_site' => $this->integer()->notNull()

        ]);

        $this->createIndex('idx-page-id','page','id');
        $this->addForeignKey('fk-page-course_site','page','course_site','course_site','id','CASCADE','CASCADE');

        /* insert for testing*/
    }

    public function down()
    {
        $this->dropForeignKey('fk-page-course_site','page');
        $this->dropIndex('idx-page-id','page');

        $this->delete('page');
        $this->dropTable('page');
    }

}
