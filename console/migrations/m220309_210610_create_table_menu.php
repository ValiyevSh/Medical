<?php

use yii\db\Migration;

/**
 * Class m220309_210610_create_table_menu
 */
class m220309_210610_create_table_menu extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'menuimg' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%menu_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'menuname' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_menu_lang', '{{%menu_lang}}', 'owner_id', '{{%menu}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_menu_lang', '{{%menu_lang}}');
        $this->dropTable('{{%menu_lang}}');
        $this->dropTable('{{%menu}}');
    }
}
