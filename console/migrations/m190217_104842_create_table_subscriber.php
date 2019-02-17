<?php

use yii\db\Migration;

/**
 * Class m190217_104842_create_table_subscriber
 */
class m190217_104842_create_table_subscriber extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190217_104842_create_table_subscriber cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $sql = "CREATE TABLE subscriber (id INT(11) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) UNIQUE);";
        Yii::$app->db->createCommand($sql)->execute();
    }

    public function down()
    {
        $sql = "DROP TABLE subscriber;";
        Yii::$app->db->createCommand($sql)->execute();
    }
    
}
