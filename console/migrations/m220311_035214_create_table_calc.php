<?php

use yii\db\Migration;

/**
 * Class m220311_035214_create_table_calc
 */
class m220311_035214_create_table_calc extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%calc}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string(127),
           
        ], $tableOptions);

        $this->createTable('{{%calc_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
          
        ], $tableOptions);

        $this->addForeignKey('fk_calc_lang', '{{%calc_lang}}', 'owner_id', '{{%calc}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_calc_lang', '{{%calc_lang}}');
        $this->dropTable('{{%calc_lang}}');
        $this->dropTable('{{%calc}}');
    }
}
