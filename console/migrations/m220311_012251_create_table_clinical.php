<?php

use yii\db\Migration;

/**
 * Class m220311_012251_create_table_clinical
 */
class m220311_012251_create_table_clinical extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%clinical}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),
            'url' => $this->string(127),
            'status' => $this->string(127),


        ], $tableOptions);

        $this->createTable('{{%clinical_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_clinical_lang', '{{%clinical_lang}}', 'owner_id', '{{%clinical}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_clinical_lang', '{{%clinical_lang}}');
        $this->dropTable('{{%clinical_lang}}');
        $this->dropTable('{{%clinical}}');
    }
}
