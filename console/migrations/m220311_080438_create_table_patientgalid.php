<?php

use yii\db\Migration;

/**
 * Class m220311_080438_create_table_patientgalid
 */
class m220311_080438_create_table_patientgalid extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%patientgalid}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'patientid' => $this->string(127),
            'status' => $this->string(127),


        ], $tableOptions);

        $this->createTable('{{%patientgalid_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_patientgalid_lang', '{{%patientgalid_lang}}', 'owner_id', '{{%patientgalid}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_patientgalid_lang', '{{%patientgalid_lang}}');
        $this->dropTable('{{%patientgalid_lang}}');
        $this->dropTable('{{%patientgalid}}');
    }
}
