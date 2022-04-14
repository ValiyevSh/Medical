<?php

use yii\db\Migration;

/**
 * Class m220311_210659_create_table_blog
 */
class m220311_210659_create_table_blog extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),

        ], $tableOptions);

        $this->createTable('{{%blog_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'name' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_blog_lang', '{{%blog_lang}}', 'owner_id', '{{%blog}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_blog_lang', '{{%blog_lang}}');
        $this->dropTable('{{%blog_lang}}');
        $this->dropTable('{{%blog}}');
    }
}
