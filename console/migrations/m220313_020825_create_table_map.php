<?php

use yii\db\Migration;

/**
 * Class m220313_020825_create_table_map
 */
class m220313_020825_create_table_map extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%map}}', [
            'id' => $this->primaryKey(),
            
        ], $tableOptions);

        $this->createTable('{{%map_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_map_lang', '{{%map_lang}}', 'owner_id', '{{%map}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_map_lang', '{{%map_lang}}');
        $this->dropTable('{{%map_lang}}');
        $this->dropTable('{{%map}}');
    }

}
