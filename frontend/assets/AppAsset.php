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
        'css/site.css',
        'css/dashboard.css',
        'css/perfect-scrollbar.css',
        'css/plugin.css',
        'css/style.css',
    ];
    public $js = [
        'js/dashboard.js',
        'js/main.js',
        'js/plugin.js',
        'js/perfect-scrollbar.js',
        'js/chart.js',
        'js/infobox.min.js',
        'js/leaflet.min.js',
        'js/leaflet-custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
