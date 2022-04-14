<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Patientgalid extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%patientgalid}}';
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
            [['title_uz'], 'required'],
            [['img'], 'string', 'max' => 127],
            [['title'], 'string', 'max' => 255],

            [['patientid'], 'string'],
            [['status'], 'string'],
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
                'img' => 'Rasm',
                'title' => 'Sarlavha',
                'patientid' => 'Bo\'lim',

            ];
    }
    public function GetPate()
    {

        return $this->hasMany(Patientgal::className(), [
            'id' => 'patientid'
        ]);
    }
}
