<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Happypatient */

$this->title = Yii::t('app', 'Create Happypatient');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Happypatients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="happypatient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
