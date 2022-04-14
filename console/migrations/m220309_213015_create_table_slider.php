<?php

use yii\db\Migration;

/**
 * Class m220309_213015_create_table_slider
 */
class m220309_213015_create_table_slider extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'backgroundimg' => $this->string(127),
            'buttonurl' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%slider_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
            'medicalname' => $this->text(),
            'buttonlabel' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_slider_lang', '{{%slider_lang}}', 'owner_id', '{{%slider}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_slider_lang', '{{%slider_lang}}');
        $this->dropTable('{{%slider_lang}}');
        $this->dropTable('{{%slider}}');
    }
}
