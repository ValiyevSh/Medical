<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $date
 * @property string $male
 * @property string $status
 * @property string $message
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'date', 'male', 'status', 'message'], 'required'],
            [['name', 'date', 'male', 'status', 'message'], 'string'],
            [['email'], 'string', 'max' => 100],
            [['email'], 'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'date' => Yii::t('app', 'Date'),
            'male' => Yii::t('app', 'Male'),
            'status' => Yii::t('app', 'Status'),
            'message' => Yii::t('app', 'Message'),
            'name'=>'Ismi',
            'email'=>'Email',
            'date'=>'qabul vaqti',
            'male'=>'Jinsi',
            'message'=>'Habar',
        ];
    }
}
