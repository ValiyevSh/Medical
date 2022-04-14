<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Slider extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%slider}}';
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
                    'title', 'content', 'medicalname', 'buttonlabel',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['content'], 'required'],
            [['medicalname'], 'string', 'max' => 127],
            [['title'], 'string', 'max' => 255],
            [['buttonlabel'], 'string', 'max' => 255],
            [['backgroundimg'], 'string', 'max' => 255],
            [['buttonurl'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['status'], 'string'],
            [['position'], 'string'],
        ];
    }

    public static function find()
    {
        $query =  new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

    public function attributeLabels()
    {
        return
            [
                'backgroundimg' => 'Rasm',
                'status' => 'Faolligi',
                'content' => "Klinika Ma'lumoti ",
                'buttonurl' => 'Tugma Silkasi',
                'buttonlabel' => 'Tugma Nomi',
                'medicalname' => 'Klinika Nomi',
                'title' => ' Slayder Matni',
                'position' => 'Matn joylashuv o\'rni'
            ];
    }
}
