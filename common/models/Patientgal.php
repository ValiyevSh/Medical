<?php

namespace common\models;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;

class Patientgal extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%patientgal}}';
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
                    'name',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name_uz'], 'required'],
            [['status'], 'string', 'max' => 255],

            [['name'], 'string', 'max' => 255],

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
                'name' => 'Bemorlar bo\'limi',
                'status' => 'Faolligi',
            ];
    }
    // public function getUsers()
    // {

    //     return $this->hasMany(Patientgalid::className(), [
    //         'patientid' => 'id'
    //     ]);
    // }
}
