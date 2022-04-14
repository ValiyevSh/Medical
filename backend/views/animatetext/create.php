<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Animatetext */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Animatetexts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animatetext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>