<?php

use yii\db\Migration;

/**
 * Class m220311_042118_create_table_patient
 */
class m220311_042118_create_table_patient extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%patient}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'name' => $this->string(255)->notNull(),
            'status' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%patient_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
          
            'country' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_patient_lang', '{{%patient_lang}}', 'owner_id', '{{%patient}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_patient_lang', '{{%patient_lang}}');
        $this->dropTable('{{%patient_lang}}');
        $this->dropTable('{{%patient}}');
    }
}
