<?php

use yii\db\Migration;

/**
 * Class m220310_035736_create_table_slidericon
 */
class m220310_035736_create_table_slidericon extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%slidericon}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%slidericon_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'silka' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_slidericon_lang', '{{%slidericon_lang}}', 'owner_id', '{{%slidericon}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_slidericon_lang', '{{%slidericon_lang}}');
        $this->dropTable('{{%slidericon_lang}}');
        $this->dropTable('{{%slidericon}}');
    }
}
