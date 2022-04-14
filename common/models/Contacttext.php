<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Contacttext extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%contacttext}}';
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
                    'title', 'content', 'buttonlabel'
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title_uz'], 'required'],
            [['img'], 'string', 'max' => 127],
            [['title'], 'string', 'max' => 255],
            [['buttonlabel'], 'string', 'max' => 255],

            [['content'], 'string'],
        ];
    }

    public static function find()
    {
        return new MultilingualQuery(get_called_class());
    }
    public function attributeLabels()
    {
        return
            [
                'buttonlabel' => 'Tugma',
                'content' => "Ma'lumot",
                'title' => 'Sarlavha',
                'img' => 'Orqa fon rasmi',
            ];
    }
}
