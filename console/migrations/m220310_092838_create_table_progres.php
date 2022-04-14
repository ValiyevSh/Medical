<?php

use yii\db\Migration;

/**
 * Class m220310_092838_create_table_progres
 */
class m220310_092838_create_table_progres extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%progres}}', [
            'id' => $this->primaryKey(),
            'progres' => $this->string(127),
            'status' => $this->string(127),
            'color' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%progres_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_progres_lang', '{{%progres_lang}}', 'owner_id', '{{%progres}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_progres_lang', '{{%progres_lang}}');
        $this->dropTable('{{%progres_lang}}');
        $this->dropTable('{{%progres}}');
    }
}
