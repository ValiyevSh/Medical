<?php

use yii\db\Migration;

/**
 * Class m220310_053824_create_table_medic
 */
class m220310_053824_create_table_medic extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%medic}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),
            'status' => $this->string(127),
           
        ], $tableOptions);

        $this->createTable('{{%medic_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_medic_lang', '{{%medic_lang}}', 'owner_id', '{{%medic}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_medic_lang', '{{%medic_lang}}');
        $this->dropTable('{{%medic_lang}}');
        $this->dropTable('{{%medic}}');
    }
}
