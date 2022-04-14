<?php

use yii\db\Migration;

/**
 * Class m220310_074003_create_table_animate
 */
class m220310_074003_create_table_animate extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%animate}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),
            'status' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%animate_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_animate_lang', '{{%animate_lang}}', 'owner_id', '{{%animate}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_animate_lang', '{{%animate_lang}}');
        $this->dropTable('{{%animate_lang}}');
        $this->dropTable('{{%animate}}');
    }
}
