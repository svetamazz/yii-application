<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    "public/css/bootstrap.min.css",
    "public/css/font-awesome.min.css",
    "public/css/animate.min.css",
    "public/css/owl.carousel.css",
    "public/css/owl.theme.css",
    "public/css/owl.transitions.css",
    "public/css/style.css",
    "public/css/responsive.css",
    "public/audio_player/css/maudio.css",
    "public/css/ownStyle.css"

    ];
    public $js = [
        "public/js/jquery-1.11.3.min.js",
        "public/js/bootstrap.min.js",
        "public/js/owl.carousel.min.js",
        "public/js/jquery.stickit.min.js",
        "public/js/menu.js",
        "public/audio_player/js/maudio.js",
        "public/js/scripts.js",
        "public/js/ownScript.js",
    ];
    public $depends = [

    ];
}
