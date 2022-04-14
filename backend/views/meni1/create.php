<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Meni1 */

$this->title = Yii::t('app', 'Create Meni 1');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meni 1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meni1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
