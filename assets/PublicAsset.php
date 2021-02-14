<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      "public/css/bootstrap.min.css",
      "public/css/font-awesome.min.css",
      "public/css/magnific-popup.css",
      "public/css/owl.carousel.min.css",
      "public/css/animate.css",
      "public/css/slicknav.min.css",
      "public/css/style.css"
    ];
    public $js = [
      "public/js/jquery-3.2.1.min.js",
      "public/js/bootstrap.min.js",
      "public/js/jquery.slicknav.js",
      "public/js/owl.carousel.min.js",
      "public/js/circle-progress.min.js",
      "public/js/jquery.magnific-popup.min.js",
      "public/js/main.js"
    ];
    public $depends = [];
}
