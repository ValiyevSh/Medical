<?php

use yii\db\Migration;

/**
 * Class m220312_233902_create_table_menu1
 */
class m220312_233902_create_table_menu1 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%meni1}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%meni1_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'home' => $this->string(255)->notNull(),
            'why' => $this->string(255)->notNull(),
            'appoint' => $this->string(255)->notNull(),
            'gallery' => $this->string(255)->notNull(),
            'blog' => $this->string(255)->notNull(),
            'contact' => $this->string(255)->notNull(),
           
        ], $tableOptions);

        $this->addForeignKey('fk_meni1_lang', '{{%meni1_lang}}', 'owner_id', '{{%meni1}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_meni1_lang', '{{%meni1_lang}}');
        $this->dropTable('{{%meni1_lang}}');
        $this->dropTable('{{%meni1}}');
    }
}
