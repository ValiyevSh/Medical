<?php

use mihaildev\elfinder\InputFile;
use yii\helpers\Html;
use yeesoft\multilingual\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
?>


<?php if (Yii::$app->session->hasFlash('message')) : ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Menyu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= Url::home() ?>">Bosh Sahifa</a></li>
                    <li class="breadcrumb-item active"><a href="<?= Url::to(['meni1/index']) ?>">Menyu</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-body">

<?php $form = ActiveForm::begin() ?>

<?= $form->languageSwitcher($model); ?>

<?= $form->field($model, 'img')->widget(InputFile::className(), [
                        'language'      => 'ru',
                        'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                        'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                        'options'       => ['class' => 'form-control'],
                        'buttonOptions' => ['class' => 'btn btn-default'],
                        'multiple'      => false       // возможность выбора нескольких файлов
                    ]); ?>
<?= $form->field($model, 'home')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'why')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'appoint')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'gallery')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'blog')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>


<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
<div class="col-12">
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

</section>
