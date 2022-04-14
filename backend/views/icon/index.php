<?php

use common\models\Icon;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\IconSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ikonka Qismi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= Url::home() ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?= Url::to(['slider/index']) ?>">Ikonka Qismi</a></li>
                </ol>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <a href="<?= url::to(['icon/create']) ?>"> <span style="margin-left: 95%; color:white;" class="btn btn-info">
            <ion-icon size="small" name="add-outline"></ion-icon>
        </span></a>
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example2" class="table table-bordered table-hover">

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],


                                    'icon:ntext',
                                    'silka:ntext',
                                    [
                                        'attribute' => 'status',
                                        'format' => 'raw',

                                        'attribute' => 'status',
                                        'format' => 'raw',
                                        'filter' => [
                                            'active' => 'active',
                                            'noactive' => 'noactive',
                                        ],
                                        'value' => function ($model, $url) {
                                            if ($model->status == 'active') {
                                                $class = 'btn btn-info';
                                                $text = 'active';
                                            } else {
                                                $class = 'btn btn-danger';
                                                $text = 'noactive';
                                            }
                                            return "<a href='" . url::to(['icon/status', 'id' => $model->id]) . "'> <span class='" . $class . "'>" . $text . "</span></a>";
                                        }
                                    ],
                                    [
                                        'class' => ActionColumn::className(),
                                        'urlCreator' => function ($action, Icon $model, $key, $index, $column) {
                                            return Url::toRoute([$action, 'id' => $model->id]);
                                        }
                                    ],

                                ],
                            ]); ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->