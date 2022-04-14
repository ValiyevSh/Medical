<?php

use yii\db\Migration;

/**
 * Class m220310_040952_create_table_icon
 */
class m220310_040952_create_table_icon extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%icon}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(),
            'silka' => $this->string(),

        ], $tableOptions);

        $this->createTable('{{%icon_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_icon_lang', '{{%icon_lang}}', 'owner_id', '{{%icon}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_icon_lang', '{{%icon_lang}}');
        $this->dropTable('{{%icon_lang}}');
        $this->dropTable('{{%icon}}');
    }
}
