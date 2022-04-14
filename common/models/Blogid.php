<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Blogid extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%blogid}}';
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
            [['img'], 'string', 'max' => 127],
            [['title'], 'string', 'max' => 255],
            [['categoryid'], 'string'],
            [['date'], 'string'],
            [['status'], 'string'],
            [['byadmin'], 'string'],
            [['adminimg'], 'string'],
            [['content'], 'string'],
        ];
    }
    public function attributeLabels()
    {
        return
            [
                'img' => 'rasm',
                'title' => 'Sarlavha',
                'date' => 'Vaqti',
                'byadmin' => 'Admin',
                'status' => 'Faolligi',
                'categoryid' => "Bo'lim Nomi",
                'content' => "Ma'lumot",
                'adminimg' => 'Admin Rasmi',
            ];
    }

    public static function find()
    {
        return new MultilingualQuery(get_called_class());
    }


    public function getBloglist()
    {
        return $this->hasOne(
            Blog::className(),
            [
                'id' => 'categoryid'
            ]
        );
    }
}
