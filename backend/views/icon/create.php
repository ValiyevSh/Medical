<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Icon */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Icons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="icon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>