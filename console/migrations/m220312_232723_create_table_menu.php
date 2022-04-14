<?php

use yii\db\Migration;

/**
 * Class m220312_232723_create_table_menu
 */
class m220312_232723_create_table_menu extends Migration
{
   
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%post_lang}}', [
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

        $this->addForeignKey('fk_post_lang', '{{%post_lang}}', 'owner_id', '{{%post}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_post_lang', '{{%post_lang}}');
        $this->dropTable('{{%post_lang}}');
        $this->dropTable('{{%post}}');
    }

}
