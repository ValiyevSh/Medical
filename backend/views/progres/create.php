<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Progres */


$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Progres'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>