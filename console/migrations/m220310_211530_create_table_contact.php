<?php

use yii\db\Migration;

/**
 * Class m220310_211530_create_table_contact
 */
class m220310_211530_create_table_contact extends Migration
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
        echo "m220310_211530_create_table_contact cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220310_211530_create_table_contact cannot be reverted.\n";

        return false;
    }
    */
}
