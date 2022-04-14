<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Happypatient */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Happypatients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="happypatient-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
