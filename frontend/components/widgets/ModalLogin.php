<?php
namespace frontend\components\widgets;


/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 01.04.16
 * Time: 22:37
 */


class ModalLogin extends \yii\base\Widget
{

    public function init()
    {
        parent::init();

    }

    public function run()
    {

        return $this->render('modal-login');
    }
}