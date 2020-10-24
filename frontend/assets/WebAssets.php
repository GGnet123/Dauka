<?php


namespace frontend\assets;


use yii\web\AssetBundle;

class WebAssets extends AssetBundle
{
    public $basePath = '';
    public $baseUrl = '';
    public $css = [
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap',
    ];
    public $js = [
    ];
    public $depends = [];
}