<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Medic extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%medic}}';
    }

    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'en' => 'English',
                ],
                'attributes' => [
                    'title', 'content',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
                [['title'], 'required'],
                [['icon'], 'string', 'max' => 127],
                [['title'], 'string', 'max' => 255],
                [['status'], 'string', 'max' => 255],
              
                [['content'], 'string'],
        ];
    }

    public static function find()
    {
         new MultilingualQuery(get_called_class());
    }

}