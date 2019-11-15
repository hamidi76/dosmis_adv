<?php

namespace backend\assets;

use yii\web\AssetBundle;
/**
 * Main backend application asset bundle.
 */
class DashtkAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800',
        'css/site.css',
        'css/admintk/bootstrap.min.css',
        'css/admintk/all.min.css',
        'css/admintk/iconkit.min.css',
        'css/admintk/ionicons.min.css',
        'css/admintk/perfect-scrollbar.css',
        'css/admintk/dataTables.bootstrap4.min.css',
        'css/admintk/jquery-jvectormap.css',
        'css/admintk/tempusdominus-bootstrap-4.min.css',
        'css/admintk/weather-icons.min.css',
        'css/admintk/c3.min.css',
        'css/admintk/owl.carousel.min.css',
        'css/admintk/owl.theme.default.min.css',
        'css/admintk/theme.min.css',
     ];
    public $js = [
        'js/admintk/modernizr-2.8.3.min.js',
        'js/admintk/popper.min.js',
        'js/admintk//bootstrap.min.js',
        'js/admintk/perfect-scrollbar.min.js',
        'js/admintk/screenfull.js',
        'js/admintk/jquery.dataTables.min.js',
        'js/admintk/dataTables.bootstrap4.min.js',
        'js/admintk/dataTables.responsive.min.js',
        'js/admintk/responsive.bootstrap4.min.js',
        'js/admintk/jquery-jvectormap.min.js',
        'js/admintk/jquery-jvectormap-world-mill-en.js',
        'js/admintk/moment.js',
        'js/admintk/tempusdominus-bootstrap-4.min.js',
        'js/admintk/d3.min.js',
        'js/admintk/c3.min.js',
        'js/admintk/tables.js',
        'js/admintk/widgets.js',
        'js/admintk/charts.js',
        'js/admintk/theme.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}