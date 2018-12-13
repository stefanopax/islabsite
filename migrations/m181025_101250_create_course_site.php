<?php

use yii\db\Migration;

/**
 * Class m181025_101250_create_course_site
 */
class m181025_101250_create_course_site extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('course_site', [
            'id' => $this->primaryKey(),
            'title' => $this->string(30)->notNull(),
            'edition' => $this->string(30)->notNull(),
            'opening_date' => $this->datetime(),
            'closing_date' => $this->datetime(),
            'css' => $this->text(),
            'is_current' => $this->boolean()->defaultValue('false'),
            'course' => $this->integer()->notNull()

		]);

        $this->createIndex('idx-course_site-id','course_site','id');
        $this->addForeignKey('fk-course_site-course','course_site','course','course','id','CASCADE','CASCADE');

        /* insert for testing*/
    }

    public function down()
    {
        $this->dropForeignKey('fk-course_site-course','course_site');
        $this->dropIndex('idx-course_site-id','course_site');

        $this->delete('course_site');
        $this->dropTable('course_site');
    }
}
