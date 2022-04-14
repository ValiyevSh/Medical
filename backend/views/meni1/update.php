<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Meni1 */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meni 1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="meni1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
