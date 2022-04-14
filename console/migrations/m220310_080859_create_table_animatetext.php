<?php

use yii\db\Migration;

/**
 * Class m220310_080859_create_table_animatetext
 */
class m220310_080859_create_table_animatetext extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%animatetext}}', [
            'id' => $this->primaryKey(),

        ], $tableOptions);

        $this->createTable('{{%animatetext_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
            'bigtitle' => $this->text(),

        ], $tableOptions);

        $this->addForeignKey('fk_animatetext_lang', '{{%animatetext_lang}}', 'owner_id', '{{%animatetext}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_animatetext_lang', '{{%animatetext_lang}}');
        $this->dropTable('{{%animatetext_lang}}');
        $this->dropTable('{{%animatetext}}');
    }
}
