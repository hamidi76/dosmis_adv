<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/adminlte2/bootstrap.css',
        'css/adminlte2/font-awesome.css',
        'css/adminlte2/ionicons.css',
        'css/adminlte2/AdminLTE.css',
        'css/adminlte2/skins/_all-skins.css',
        'css/adminlte2/morris.css',
        'css/adminlte2/jquery-jvectormap.css',
        'css/adminlte2/bootstrap-datepicker.css',
        'css/adminlte2/daterangepicker.css',
        'css/adminlte2/bootstrap3-wysihtml5.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];
    public $js = [
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
        'js/adminlte2/jquery.js',
        'js/adminlte2/jquery-ui.js',
        'js/adminlte2/bootstrap.js',
        'js/adminlte2/raphael.js',
        'js/adminlte2/morris.min.js',
        'js/adminlte2/jquery.sparkline.min.js',
        'js/adminlte2/jquery-jvectormap-1.2.2.min.js',
        'js/adminlte2/jquery-jvectormap-world-mill-en.js',
        'js/adminlte2/jquery.knob.min.js',
        'js/adminlte2/moment.min.js',
        'js/adminlte2/daterangepicker.js',
        'js/adminlte2/bootstrap-datepicker.min.js',
        'js/adminlte2/bootstrap3-wysihtml5.all.min.js',
        'js/adminlte2/jquery.slimscroll.min.js',
        'js/adminlte2/fastclick.js',
        'js/adminlte2/adminlte.min.js',
        'js/adminlte2/dashboard.js',
        'js/adminlte2/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
