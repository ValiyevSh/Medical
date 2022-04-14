<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Blogslider */

$this->title = Yii::t('app', 'Create Blogslider');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogsliders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogslider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
