<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Counter extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%counter}}';
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
                [['number'], 'string', 'max' => 127],
               
        ];
    }

    public static function find()
    {
        $query= new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }
    public function attributeLabels()
    {
        return 
        [
            'number'=>'Raqam',
            'title'=>'Nomi',
        ];
    }

}