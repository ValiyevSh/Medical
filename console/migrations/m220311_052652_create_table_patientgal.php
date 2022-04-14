<?php

use yii\db\Migration;

/**
 * Class m220311_052652_create_table_patientgal
 */
class m220311_052652_create_table_patientgal extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%patientgal}}', [
            'id' => $this->primaryKey(),
           
        ], $tableOptions);

        $this->createTable('{{%patientgal_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'name' => $this->string(255)->notNull(),
           
        ], $tableOptions);

        $this->addForeignKey('fk_patientgal_lang', '{{%patientgal_lang}}', 'owner_id', '{{%patientgal}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_patientgal_lang', '{{%patientgal_lang}}');
        $this->dropTable('{{%patientgal_lang}}');
        $this->dropTable('{{%patientgal}}');
    }
}
