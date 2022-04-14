<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Clinical */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clinicals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="clinical-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>