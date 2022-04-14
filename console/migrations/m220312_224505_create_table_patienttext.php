<?php

use yii\db\Migration;

/**
 * Class m220312_224505_create_table_patienttext
 */
class m220312_224505_create_table_patienttext extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%patienttext}}', [
            'id' => $this->primaryKey(),
           
        ], $tableOptions);

        $this->createTable('{{%patienttext_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_patienttext_lang', '{{%patienttext_lang}}', 'owner_id', '{{%patienttext}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_patienttext_lang', '{{%patienttext_lang}}');
        $this->dropTable('{{%patienttext_lang}}');
        $this->dropTable('{{%patienttext}}');
    }
}
