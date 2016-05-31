<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 30.05.16
 * Time: 22:34
 */
namespace frontend\assets;
use yii\web\AssetBundle;

class CountdownAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.countdown';
    public $js = [
        'dist/jquery.countdown.min.js',
    ];
}