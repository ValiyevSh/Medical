<?php

use yii\helpers\Html;
use yeesoft\multilingual\widgets\ActiveForm;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hizmat ko'rsatish</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= Url::home() ?>">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item active"><a href="<?= Url::to(['clinical/index']) ?>">Hizmat ko'rsatish</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-9">
            <div class="card card-primary">

                <div class="card-body">
                    <?php if (Yii::$app->session->hasFlash('message')) : ?>
                        <div class="alert alert-info" role="alert">
                            <?= Yii::$app->session->getFlash('message') ?>
                        </div>
                    <?php endif; ?>

                    <?php $form = ActiveForm::begin() ?>

                    <?= $form->languageSwitcher($model); ?>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
                        'editorOptions' => [
                            'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]); ?>

                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

                    <?php ActiveForm::end(); ?>
                    <div class="col-12">
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-3">
            <div role="iconpicker"></div>
        </div>

    </div>

</section>