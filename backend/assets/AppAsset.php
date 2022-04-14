<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css', "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback",
        "plugins/fontawesome-free/css/all.min.css",
        "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
        "plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
        "plugins/icheck-bootstrap/icheck-bootstrap.min.css",
        "plugins/jqvmap/jqvmap.min.css",
        "dist/css/adminlte.min.css",
        "plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
        "plugins/daterangepicker/daterangepicker.css",
        //   "plugins/summernote/summernote-bs4.min.css",
        'css/custom.css',
        "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css",
        "https://use.fontawesome.com/releases/v5.3.1/css/all.css",
        "dist/css/bootstrap-iconpicker.min.css",





    ];
    public $js = [

        //    "https://code.jquery.com/jquery-3.3.1.min.js",

        "plugins/jquery-ui/jquery-ui.min.js",
        "plugins/bootstrap/js/bootstrap.bundle.min.js",
        "plugins/chart.js/Chart.min.js",
        "plugins/sparklines/sparkline.js",
        "plugins/jqvmap/jquery.vmap.min.js",
        "plugins/jqvmap/maps/jquery.vmap.usa.js",
        "plugins/jquery-knob/jquery.knob.min.js",
        "plugins/moment/moment.min.js",
        "plugins/daterangepicker/daterangepicker.js",
        "plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "plugins/summernote/summernote-bs4.min.js",
        "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "dist/js/adminlte.js",
        // "dist/js/demo.js",
        //"dist/js/pages/dashboard.js",
        //"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js",
        "dist/js/bootstrap-iconpicker.bundle.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
