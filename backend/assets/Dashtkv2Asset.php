<?php

namespace backend\assets;

use yii\web\AssetBundle;
/**
 * Main backend application asset bundle.
 */
class Dashtkv2Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800',
        'css/site.css',
        'css/admintkv2/bootstrap.min.css',
        'css/admintkv2/all.min.css',
        'css/admintkv2/iconkit.min.css',
        'css/admintkv2/ionicons.min.css',
        'css/admintkv2/perfect-scrollbar.css',
        'css/admintkv2/dataTables.bootstrap4.min.css',
        'css/admintkv2/jquery-jvectormap.css',
        'css/admintkv2/tempusdominus-bootstrap-4.min.css',
        'css/admintkv2/weather-icons.min.css',
        'css/admintkv2/c3.min.css',
        'css/admintkv2/owl.carousel.min.css',
        'css/admintkv2/owl.theme.default.min.css',
        'css/admintkv2/theme.min.css',
     ];
    public $js = [
        'js/admintkv2/modernizr-2.8.3.min.js',
        'js/admintkv2/popper.min.js',
        'js/admintkv2//bootstrap.min.js',
        'js/admintkv2/perfect-scrollbar.min.js',
        'js/admintkv2/screenfull.js',
        'js/admintkv2/jquery.dataTables.min.js',
        'js/admintkv2/dataTables.bootstrap4.min.js',
        'js/admintkv2/dataTables.responsive.min.js',
        'js/admintkv2/responsive.bootstrap4.min.js',
        'js/admintkv2/jquery-jvectormap.min.js',
        'js/admintkv2/jquery-jvectormap-world-mill-en.js',
        'js/admintkv2/moment.js',
        'js/admintkv2/tempusdominus-bootstrap-4.min.js',
        'js/admintkv2/d3.min.js',
        'js/admintkv2/c3.min.js',
        'js/admintkv2/tables.js',
        'js/admintkv2/widgets.js',
        'js/admintkv2/charts.js',
        'js/admintkv2/theme.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}