<?php
    namespace app\components;

use yii\base\Behavior;


class Language extends Behavior
{
 
    public function events()
    {
        return 
        [
            \yii\web\Application::EVENT_BEFORE_REQUEST=>'fun'
        ];       
    }
 

 public function fun()
 {

    if(\yii::$app->session->has('language'))
    {
        \yii::$app->language=\yii::$app->session->get('language');
    }
 }

} 



?> 