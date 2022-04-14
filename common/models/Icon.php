<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "icon".
 *
 * @property int $id
 * @property string $icon
 * @property string $silka
 */
class Icon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icon', 'silka','status'], 'required'],
            [['icon', 'silka'], 'string'],
            [[ 'status'], 'string'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'icon' => Yii::t('app', 'Icon'),
            'silka' => Yii::t('app', 'Silka'),
            'icon' => 'Ikonka',
            'silka' => 'silka',
        ];
    }
}
