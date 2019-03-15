<?php

use yii\db\Migration;

/**
 * Handles adding new_ to table `{{%employee}}`.
 */
class m190305_074600_add_new__column_to_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->addColumn('employee', 'first_name', 'text AFTER fullname');
        $this->addColumn('employee', 'middle_name', 'text AFTER first_name');
        $this->addColumn('employee', 'last_name', 'text AFTER middle_name');
        $this->addColumn('employee', 'city', 'text AFTER last_name');
        $this->addColumn('employee', 'hiring_date', 'date AFTER city');
        $this->addColumn('employee', 'id_code', 'integer(10) AFTER email');
        $this->dropColumn('employee', 'fullname');
        $this->dropColumn('employee', 'workterms');
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropColumn('employee', 'first_name');
        $this->dropColumn('employee', 'middle_name');
        $this->dropColumn('employee', 'last_name');
        $this->dropColumn('employee', 'city');
        $this->dropColumn('employee', 'hiring_date');
        $this->dropColumn('employee', 'id_code');
        $this->addColumn('employee', 'fullname', 'text AFTER id');
        $this->addColumn('employee', 'workterms', 'integer(11) AFTER birthday');
    }
}
