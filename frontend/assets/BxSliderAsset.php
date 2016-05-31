<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 30.05.16
 * Time: 22:27
 */

/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 29.03.16
 * Time: 23:11
 */
namespace frontend\assets;
use yii\web\AssetBundle;

class BxSliderAsset extends AssetBundle
{
    public $sourcePath = '@bower/bxslider';
    public $js = [
        'jquery.bxSlider.min.js',
    ];
}