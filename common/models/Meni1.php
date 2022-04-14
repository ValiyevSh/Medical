<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class  Meni1 extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%meni1}}';
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
                    'home', 'why','appoint', 'gallery','blog', 'contact',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
                [['home_uz'], 'required'],
                [['img'], 'string', 'max' => 127],
                [['home'], 'string', 'max' => 255],
                [['why'], 'string'],
                [['appoint'], 'string', 'max' => 255],
                [['gallery'], 'string', 'max' => 255],
                [['blog'], 'string', 'max' => 255],
                [['contact'], 'string', 'max' => 255],

        ];
    }
public function attributeLabels()
{
    return
    [
        'img'=>'Logotip Rasm',
        'home'=>'Bosh sahifa',
        'why'=>'Biz haqimizda',
        'appoint'=>'Qabul',
        'gallery'=>'Galareya',
        'blog'=>'Yangiliklar',
        'contact'=>'Manzil',
    ];
}
    public static function find()
    {
    $query=new MultilingualQuery(get_called_class());
       return $query->multilingual();
    }

}