<?php
namespace frontend\assets;
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 30.05.16
 * Time: 22:47
 */
use yii\web\AssetBundle;
class MarqueeAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.marquee';
    public $js = [
        'jquery.marquee.min.js',
    ];
}