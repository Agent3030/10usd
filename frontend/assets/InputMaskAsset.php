<?php
namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 30.05.16
 * Time: 22:37
 */
class InputMaskAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.inputmask';
    public $js = [
        'dist/jquery.inputmask.bundle.js',
    ];
}