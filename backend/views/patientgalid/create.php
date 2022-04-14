<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Patientgalid */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Patientgalids'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patientgalid-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>