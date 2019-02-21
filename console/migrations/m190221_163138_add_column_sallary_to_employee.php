<?php

use yii\db\Migration;

/**
 * Class m190221_163138_add_column_sallary_to_employee
 */
class m190221_163138_add_column_sallary_to_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

         $this->addColumn('employee', 'salary', 'integer(7) AFTER position');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190221_163138_add_column_sallary_to_employee cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190221_163138_add_column_sallary_to_employee cannot be reverted.\n";

        return false;
    }
    */
}
