<?php

use yii\db\Migration;

/**
 * Class m220311_033447_create_table_count
 */
class m220311_033447_create_table_count extends Migration
{  public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%count}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(127),
           
        ], $tableOptions);

        $this->createTable('{{%count_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
           
        ], $tableOptions);

        $this->addForeignKey('fk_count_lang', '{{%count_lang}}', 'owner_id', '{{%count}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_count_lang', '{{%count_lang}}');
        $this->dropTable('{{%count_lang}}');
        $this->dropTable('{{%count}}');
    }
}
