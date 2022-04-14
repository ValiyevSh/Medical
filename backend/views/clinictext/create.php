<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Clinictext */

$this->title = Yii::t('app', 'Create Clinictext');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clinictexts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinictext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
