<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adminimg".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 */
class Adminimg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adminimg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img'], 'required'],
            [['name', 'img'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'img' => Yii::t('app', 'Img'),
            'adminimg' => 'Rasm',
            'name' => 'Ism',
        ];
    }
}
