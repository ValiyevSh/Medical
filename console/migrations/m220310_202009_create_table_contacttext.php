<?php

use yii\db\Migration;

/**
 * Class m220310_202009_create_table_contacttext
 */
class m220310_202009_create_table_contacttext extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%contacttext}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'buttonlabel' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%contacttext_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_contacttext_lang', '{{%contacttext_lang}}', 'owner_id', '{{%contacttext}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_contacttext_lang', '{{%contacttext_lang}}');
        $this->dropTable('{{%contacttext_lang}}');
        $this->dropTable('{{%contacttext}}');
    }
}
