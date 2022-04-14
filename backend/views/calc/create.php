<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Calc */

$this->title = Yii::t('app', 'Create Calc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Calcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
