<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Blogid */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogids'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>