<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Calc;


$this->title = 'Slayder Qismi'; ?>
<div class="slider-index">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hisob kitob</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= Url::home() ?>">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= Url::to(['calc/index']) ?>">Hiob kitob</a></li>
                    </ol>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <a href="<?= url::to(['calc/create']) ?>"> <span style="margin-left: 95%; color:white;" class="btn btn-info">
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


                                        'number',
                                        'title',
                                        [
                                            'attribute' => 'status',
                                            'format' => 'raw',

                                            'value' => function ($model, $url) {
                                                if ($model->status == 'active') {
                                                    $class = 'btn btn-info';
                                                    $text = 'active';
                                                } else {
                                                    $class = 'btn btn-danger';
                                                    $text = 'noactive';
                                                }
                                                return "<a href='" . url::to(['calc/status', 'id' => $model->id]) . "'> <span class='" . $class . "'>" . $text . "</span></a>";
                                            }
                                        ],

                                        [
                                            'class' => ActionColumn::className(),
                                            'urlCreator' => function ($action, Calc $model, $key, $index, $column) {
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
</div>

</div>

</style>
<script>
    $(function() {
            $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }

            ).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                }

            );
        }

    );
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>