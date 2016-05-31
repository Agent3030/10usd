<?php
namespace frontend\assets;
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 30.05.16
 * Time: 22:53
 */
use yii\web\AssetBundle;
class VivusAsset extends AssetBundle
{
    public $sourcePath = '@bower/vivus';
    public $js = [
        'dist/vivus.min.js',
    ];
}