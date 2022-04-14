<?php

use yii\db\Migration;

/**
 * Class m220312_230823_create_table_happypatient
 */
class m220312_230823_create_table_happypatient extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%happypatient}}', [
            'id' => $this->primaryKey(),
           
        ], $tableOptions);

        $this->createTable('{{%happypatient_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_happypatient_lang', '{{%happypatient_lang}}', 'owner_id', '{{%happypatient}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_happypatient_lang', '{{%happypatient_lang}}');
        $this->dropTable('{{%happypatient_lang}}');
        $this->dropTable('{{%happypatient}}');
    }
}
