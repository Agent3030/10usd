<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 01.04.16
 * Time: 23:08
 */
/*print_r($dataProvider->models);
 echo \yii\widgets\ListView::widget([
    'dataProvider'=>$dataProvider,
    'pager'=>[
        'hideOnSinglePage'=>true,
    ],
     'summary' => false,
    'itemView'=>'_news'

])*/


?>
<div class="modal-header">
     <h4 class="modal-title" id="myModalLabel">Авторизация</h4>
</div>
<div class="modal-body">
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Логин...">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Пароль...">
    </div>
    <div class="form-group">
        <label><input type="checkbox"> запомнить меня</label>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <input type="submit" class="b_orange" value="Войти">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6"><div class="pull-left"><a href="#">регистрация</a></div></div>
                    <div class="col-sm-6"><div class="pull-right"><a href="#">забыли пароль?</a></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="soc_modal">
        <div class="tac">Войти с помощью соц. сети:</div>
        <div class="soc_modal_wr tac">
            <a class="soc_modal_item soc_fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="soc_modal_item soc_vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a class="soc_modal_item soc_tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="soc_modal_item soc_gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a class="soc_modal_item soc_at"><i class="fa fa-at" aria-hidden="true"></i></a>
        </div>
    </div>
</div>