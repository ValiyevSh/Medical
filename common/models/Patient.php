<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Patient extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%patient}}';
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
                    'title', 'country',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
                [['title_uz'], 'required'],
                [['img'], 'string', 'max' => 127],
                [['name'], 'string', 'max' => 255],
                [['title'], 'string'],
                [['status'], 'string', 'max' => 255],
               
                [['country'], 'string'],
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
            'img'=>'Rasm',
            'title'=>'Sarlavha',
            'name'=>'Ism',
            'country'=>'Manzili',
        ];
    }

}