<?php

use yii\db\Migration;

/**
 * Class m220311_022330_create_table_clinictext
 */
class m220311_022330_create_table_clinictext extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%clinictext}}', [
            'id' => $this->primaryKey(),

        ], $tableOptions);

        $this->createTable('{{%clinictext_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_clinictext_lang', '{{%clinictext_lang}}', 'owner_id', '{{%clinictext}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_clinictext_lang', '{{%clinictext_lang}}');
        $this->dropTable('{{%clinictext_lang}}');
        $this->dropTable('{{%clinictext}}');
    }
}
