<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Calimg */

$this->title = Yii::t('app', 'Create Calimg');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Calimgs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calimg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
