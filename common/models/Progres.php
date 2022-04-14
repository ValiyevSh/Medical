<?php

namespace common\models;

use Codeception\Step\Retry;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Progres extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%progres}}';
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
                    'title',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['progres'], 'string', 'max' => 127],
            [['title'], 'string', 'max' => 255],
            [['status'], 'string'],
            [['color'], 'string'],

        ];
    }

    public static function find()
    {
        $query = new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }
    public function attributeLabels()
    {
        return
            [
                'title' => 'Nomi',
                'progres' => 'jarayon Foizi',
                'color' => 'Rangi',
            ];
    }
}
