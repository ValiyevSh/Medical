<?php

use yii\helpers\Html;
use yeesoft\multilingual\widgets\ActiveForm;

/* @var $this yii\web\View */
?>

<?php if (Yii::$app->session->hasFlash('message')) : ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin() ?>

<?= $form->languageSwitcher($model); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>