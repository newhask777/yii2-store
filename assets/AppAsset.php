<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/font-awesome.css',
        '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic',
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic',
//        '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        'css/flexslider.css',
        'css/style.css',
    ];
    public $js = [
//        'js/jquery-1.11.1.min.js',
        'js/move-top.js',
        'js/easing.js',
        'js/minicart.js',
        'js/jquery.flexslider.js',
        'js/bootstrap.min.js',
        'js/okzoom.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
