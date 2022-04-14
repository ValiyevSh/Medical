<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Patienttext extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%patienttext}}';
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
                [['title_uz'], 'required'],
                [['title'], 'string', 'max' => 255],
               
                [['content'], 'string'],
        ];
    }

    public static function find()
    {
       $query=new MultilingualQuery(get_called_class());
       return $query->multilingual();
    }
    public function attributeLabels()
    {
        return
        [
            'title'=>'Sarlavha',
            'content'=>"Ma'lumot",
        ];
    }

}