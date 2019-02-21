<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%employee}}`.
 */
class m190221_103841_create_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%employee}}', [
            'id' => $this->primaryKey(),
            'fullname' =>$this->string()->notNull(),
            'birthday' =>$this->date()->notNull(),
            'workterms' =>$this->integer(11),
            'position' =>$this->text()->notNull(),
            'department_number' =>$this->integer(11)->notNull(),
            'email' => $this->string()->unique()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%employee}}');
    }
}
