<?php

use yii\db\Migration;

/**
 * Class m220311_024156_create_table_calculate
 */
class m220311_024156_create_table_calculate extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%calculate}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(127),
            'img' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%calculate_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_calculate_lang', '{{%calculate_lang}}', 'owner_id', '{{%calculate}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_calculate_lang', '{{%calculate_lang}}');
        $this->dropTable('{{%calculate_lang}}');
        $this->dropTable('{{%calculate}}');
    }
}
