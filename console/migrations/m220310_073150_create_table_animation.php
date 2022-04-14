<?php

use yii\db\Migration;

/**
 * Class m220310_073150_create_table_animation
 */
class m220310_073150_create_table_animation extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%animation}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),
            'status' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%animation_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_animation_lang', '{{%animation_lang}}', 'owner_id', '{{%animation}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_animation_lang', '{{%animation_lang}}');
        $this->dropTable('{{%animation_lang}}');
        $this->dropTable('{{%animation}}');
    }
}
