<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 30.05.16
 * Time: 22:19
 */
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;



/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css',
        'css/animate.css',
        'css/default.css',
        'css/default.date.css',
        'css/jquery.bxslider.min.css',
        'css/jquery.countdown.css',
    ];

    public $js = [
        'js/jquery.simplemarquee.js',
        'js/share42.js',
        'js/jquery.bxslider.min.js',
        //'js/jquery.plugin.min.js',
        'js/custom.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',

        '\rmrevin\yii\fontawesome\AssetBundle',
        //'\frontend\assets\BxSliderAsset',
        //'\frontend\assets\CountdownAsset',
        //'\frontend\assets\InputMaskAsset',
        //'\frontend\assets\MarqueeAsset',
        '\frontend\assets\VivusAsset'


    ];
}