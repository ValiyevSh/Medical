<?php


?><section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Diagramma</h3>
                    </div>
                    <div class="card-body">
                        <?php

                        use phpnt\chartJS\ChartJs;
                        ?>
                        <?php
                        $dataWeatherOne = [
                            'labels' => ["Dushanba", "Seshanba", "Chorshanba", "Payshanba", "Juma"],
                            'datasets' => [
                                [
                                    'data' => [-14, -10, -4, 6, 17, 23, 22, 22, 13, 2, -5, -12],
                                    'label' =>  "Keganlar.",
                                    'fill' => false,
                                    'lineTension' => 0.1,
                                    'backgroundColor' => "rgba(75,192,192,0.4)",
                                    'borderColor' => "rgba(75,192,192,1)",
                                    'borderCapStyle' => 'butt',
                                    'borderDash' => [],
                                    'borderDashOffset' => 0.0,
                                    'borderJoinStyle' => 'miter',
                                    'pointBorderColor' => "rgba(75,192,192,1)",
                                    'pointBackgroundColor' => "#fff",
                                    'pointBorderWidth' => 1,
                                    'pointHoverRadius' => 5,
                                    'pointHoverBackgroundColor' => "rgba(75,192,192,1)",
                                    'pointHoverBorderColor' => "rgba(220,220,220,1)",
                                    'pointHoverBorderWidth' => 2,
                                    'pointRadius' => 1,
                                    'pointHitRadius' => 10,
                                    'spanGaps' => false,
                                ]
                            ]
                        ];
                        $dataWeatherTwo = [
                            'labels' => ["Dushanba", "Seshanba", "Chorshanba", "Payshanba", "Juma"],
                            'datasets' => [
                                [
                                    'data' => [14, 10, 4, 6, 17,],
                                    'label' =>  "Keganlar).",
                                    'fill' => true,
                                    'lineTension' => 0.1,
                                    'backgroundColor' => "rgba(75,192,192,0.4)",
                                    'borderColor' => "rgba(75,192,192,1)",
                                    'borderCapStyle' => 'butt',
                                    'borderDash' => [],
                                    'borderDashOffset' => 0.0,
                                    'borderJoinStyle' => 'miter',
                                    'pointBorderColor' => "rgba(75,192,192,1)",
                                    'pointBackgroundColor' => "#fff",
                                    'pointBorderWidth' => 1,
                                    'pointHoverRadius' => 5,
                                    'pointHoverBackgroundColor' => "rgba(75,192,192,1)",
                                    'pointHoverBorderColor' => "rgba(220,220,220,1)",
                                    'pointHoverBorderWidth' => 2,
                                    'pointRadius' => 1,
                                    'pointHitRadius' => 10,
                                    'spanGaps' => false,
                                ],
                                [
                                    'data' => [8, 10, 11, 15, 21],
                                    'label' =>  "Kemaganlar",
                                    'fill' => true,
                                    'lineTension' => 0.1,
                                    'backgroundColor' => "rgba(255, 234, 0,0.4)",
                                    'borderColor' => "rgba(255, 234, 0,1)",
                                    'borderCapStyle' => 'butt',
                                    'borderDash' => [],
                                    'borderDashOffset' => 0.0,
                                    'borderJoinStyle' => 'miter',
                                    'pointBorderColor' => "rgba(255, 234, 0,1)",
                                    'pointBackgroundColor' => "#fff",
                                    'pointBorderWidth' => 1,
                                    'pointHoverRadius' => 5,
                                    'pointHoverBackgroundColor' => "rgba(255, 234, 0,1)",
                                    'pointHoverBorderColor' => "rgba(220,220,220,1)",
                                    'pointHoverBorderWidth' => 2,
                                    'pointRadius' => 1,
                                    'pointHitRadius' => 10,
                                    'spanGaps' => false,
                                ]
                            ]
                        ];
                        $dataScatter = [
                            'datasets' => [
                                [
                                    'data' => [
                                        [
                                            'x' => -10,
                                            'y' => 0
                                        ], [
                                            'x' => 0,
                                            'y' => 10
                                        ], [
                                            'x' => 10,
                                            'y' => 5
                                        ],
                                    ],
                                    'label' => 'График рассеивания',
                                    'fill' => true,
                                    'lineTension' => 0.1,
                                    'backgroundColor' => "rgba(75,192,192,0.4)",
                                    'borderColor' => "rgba(75,192,192,1)",
                                    'borderCapStyle' => 'butt',
                                    'borderDash' => [],
                                    'borderDashOffset' => 0.0,
                                    'borderJoinStyle' => 'miter',
                                    'pointBorderColor' => "rgba(75,192,192,1)",
                                    'pointBackgroundColor' => "#fff",
                                    'pointBorderWidth' => 1,
                                    'pointHoverRadius' => 5,
                                    'pointHoverBackgroundColor' => "rgba(75,192,192,1)",
                                    'pointHoverBorderColor' => "rgba(220,220,220,1)",
                                    'pointHoverBorderWidth' => 2,
                                    'pointRadius' => 1,
                                    'pointHitRadius' => 10,
                                    'spanGaps' => false,
                                ]
                            ]
                        ];
                        $dataPie = [
                            'labels' => [
                                "Красный",
                                "Синий",
                                "Желтый"
                            ],
                            'datasets' => [
                                [
                                    'data' => [300, 50, 100],
                                    'backgroundColor' => [
                                        "#FF6384",
                                        "#36A2EB",
                                        "#FFCE56"
                                    ],
                                    'hoverBackgroundColor' => [
                                        "#FF6384",
                                        "#36A2EB",
                                        "#FFCE56"
                                    ]
                                ]
                            ]
                        ];
                        $dataBubble = [
                            'datasets' => [
                                [
                                    'label' => 'Пузырьковый график',
                                    'data' => [
                                        [
                                            'x' => 20,
                                            'y' => 30,
                                            'r' => 15
                                        ],
                                        [
                                            'x' => 40,
                                            'y' => 10,
                                            'r' => 10
                                        ],
                                    ],
                                    'backgroundColor' => "#FF6384",
                                    'hoverBackgroundColor' => "#FF6384",
                                ]
                            ]
                        ];
                        // вывод графиков



                        echo ChartJs::widget([
                            'type'  => ChartJs::TYPE_BAR,
                            'data'  => $dataWeatherTwo,
                            'options'   => []
                        ]);


                        ?>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div style="padding: 0;" class="card-header">
                        <h3 style="margin-left: 30%;" class="card-title">
                            <center>
                                Habar Yuborganlar
                            </center>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div style="padding: 0;" class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width: 40%;">Ism</th>
                                    <th style="width: 18%;">Jinsi</th>
                                    <th>Sana</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $son = 0;
                                foreach ($model as $md) :

                                ?>
                                    <tr>
                                        <td><?= $son += 1 ?></td>

                                        <td><?= $md->name ?></td>

                                        <td><?= $md->male ?></td>

                                        <td><?= $md->date ?></td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <?php

                            echo yii\bootstrap4\LinkPager::widget([
                                'pagination' => $page,
                            ]);
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section><!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Galareya</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php

                            use yii\bootstrap4\LinkPager;

                            foreach ($models as $model) :
                            ?>
                                <div class="col-sm-2">
                                    <a href="<?= $model->img ?>" data-toggle="lightbox" data-title="<?= $model->img ?>" data-gallery="gallery">
                                        <img src="<?= $model->img ?>" class="img-fluid mb-2" alt="white sample" />
                                    </a>
                                </div>
                            <?php
                            endforeach;

                            ?>
                        </div>
                        <?php
                        echo LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({
            gutterPixels: 3
        });
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>
<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90]
            }, {
                label: 'Electronics',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>