<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Calculate */

$this->title = Yii::t('app', 'Create Calculate');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Calculates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calculate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
