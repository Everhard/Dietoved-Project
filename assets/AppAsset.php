<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/libs.css',
        'css/style.css',
    ];
    public $js = [
        'js/libs.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
