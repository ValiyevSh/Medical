<?php

use yii\db\Migration;

/**
 * Class m220316_232042_add_position_column_slider_table
 */
class m220316_232042_add_position_column_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%slider}}', 'position', $this->boolean()->defaultValue(false));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%slider}}', 'position');
    }
}
