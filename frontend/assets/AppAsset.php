<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',

        "medical/img/favicon.ico",
        "vendor/css/bundle.min.css",
        "vendor/css/revolution-settings.min.css",
        "vendor/css/jquery.fancybox.min.css",
        "vendor/css/owl.carousel.min.css",
        "vendor/css/swiper.min.css",
        "vendor/css/cubeportfolio.min.css",
        "vendor/css/select2.min.css",
        //"vendor/css/jquery-ui.bundle.css",
        "medical/css/style.css",
    ];
    public $js = [
        "vendor/js/bundle.min.js",
        "vendor/js/jquery.fancybox.min.js",
        "vendor/js/owl.carousel.min.js",
        "vendor/js/swiper.min.js",
        "vendor/js/jquery.cubeportfolio.min.js",
        "vendor/js/jquery.appear.js",
        "vendor/js/hover-item.js",
        "vendor/js/isotope.pkgd.min.js",
        "vendor/js/jquery.themepunch.tools.min.js",
        "vendor/js/jquery.themepunch.revolution.min.js",
        "vendor/js/extensions/revolution.extension.actions.min.js",
        "vendor/js/extensions/revolution.extension.carousel.min.js",
        "vendor/js/extensions/revolution.extension.kenburn.min.js",
        "vendor/js/extensions/revolution.extension.layeranimation.min.js",
        "vendor/js/extensions/revolution.extension.migration.min.js",
        "vendor/js/extensions/revolution.extension.navigation.min.js",
        "vendor/js/extensions/revolution.extension.parallax.min.js",
        "vendor/js/extensions/revolution.extension.slideanims.min.js",
        "vendor/js/extensions/revolution.extension.video.min.js",
        "vendor/js/select2.min.js",
        "vendor/js/date.js",
        "vendor/js/jquery.hoverdir.js",
        "vendor/js/jquery-ui.bundle.js",
        "vendor/js/flip.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo",
        "medical/js/map.js",
        "vendor/js/contact_us.js",
        "medical/js/script.js",
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
