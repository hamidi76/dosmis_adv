<?php

namespace backend\assets;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashKitAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800',
        'css/site.css',
        //'css/adminkit/plugins/bootstrap/dist/css/bootstrap.min.css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'css/adminkit/plugins/fontawesome-free/css/all.min.css',
        'css/adminkit/plugins/icon-kit/dist/css/iconkit.min.css',
        'css/adminkit/plugins/ionicons/dist/css/ionicons.min.css',
        'css/adminkit/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
        'css/adminkit/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
        'css/adminkit/plugins/jvectormap/jquery-jvectormap.css',
        'css/adminkit/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css',
        'css/adminkit/plugins/weather-icons/css/weather-icons.min.css',
        'css/adminkit/plugins/c3/c3.min.css',
        'css/adminkit/plugins/owl.carousel/dist/assets/owl.carousel.min.css',
        'css/adminkit/plugins/owl.carousel/dist/assets/owl.theme.default.min.css',
        'css/adminkit/dist/css/theme.min.css',
     ];
    public $js = [
        'js/AdminKit/src/js/vendor/modernizr-2.8.3.min.js',
        'js/AdminKit/plugins/popper.js/dist/umd/popper.min.js',
        'js/AdminKit/plugins/bootstrap/dist/js/bootstrap.min.js',
        'js/AdminKit/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js',
        'js/AdminKit/plugins/screenfull/dist/screenfull.js',
        'js/AdminKit/plugins/datatables.net/js/jquery.dataTables.min.js',
        'js/AdminKit/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
        'js/AdminKit/plugins/datatables.net-responsive/js/dataTables.responsive.min.js',
        'js/AdminKit/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
        'js/AdminKit/plugins/jvectormap/jquery-jvectormap.min.js',
        'js/AdminKit/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'js/AdminKit/plugins/moment/moment.js',
        'js/AdminKit/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js',
        'js/AdminKit/plugins/d3/dist/d3.min.js',
        'js/AdminKit/plugins/c3/c3.min.js',
        'js/AdminKit/js/tables.js',
        'js/AdminKit/js/widgets.js',
        'js/AdminKit/js/charts.js',
        'js/AdminKit/dist/js/theme.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}