<?php

use yii\db\Migration;

/**
 * Class m220311_211419_create_table_blogid
 */
class m220311_211419_create_table_blogid extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%blogid}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'byadmin' => $this->string(127),
            'categoryid' => $this->string(127),
            'status' => $this->string(127),
            'date' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%blogid_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_blogid_lang', '{{%blogid_lang}}', 'owner_id', '{{%blogid}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_blogid_lang', '{{%blogid_lang}}');
        $this->dropTable('{{%blogid_lang}}');
        $this->dropTable('{{%blogid}}');
    }
}
