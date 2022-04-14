<?php

use yii\db\Migration;

/**
 * Class m220311_232125_create_table_blogslider
 */
class m220311_232125_create_table_blogslider extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%blogslider}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%blogslider_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_blogslider_lang', '{{%blogslider_lang}}', 'owner_id', '{{%blogslider}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_blogslider_lang', '{{%blogslider_lang}}');
        $this->dropTable('{{%blogslider_lang}}');
        $this->dropTable('{{%blogslider}}');
    }
}
