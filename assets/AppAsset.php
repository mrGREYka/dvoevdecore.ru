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
        'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700',
        'https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600,700',
        'css/materialize.min.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/animate.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/lightbox.min.css',
        'css/main.css',
        'css/responsive.css',
        'css/wms_stylecss.css',
        
    ];
    public $js = [
        //'js/jquery-2.2.4.min.js',
        'js/materialize.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/isotope.pkgd.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.counterup.min.js',
        'js/jquery.scrollUp.min.js',
        'js/lightbox.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/waypoints.min.js',
        'js/datepicker.min.js',
        'js/swiper.min.js',
        'js/jquery.appear.js',
        'js/jquery.countdown.min.js',
        'js/slider-range.js',
        'js/main.js',
        //'https://maps.googleapis.com/maps/api/js?key=AIzaSyCSnDvB5P3z8FOEEuRCNnLJplNDkp8ED2I',
        //'js/map.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
