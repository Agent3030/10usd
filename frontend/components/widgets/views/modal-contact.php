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
    <h4 class="modal-title" id="myModalLabel">Обратная связь</h4>
</div>
<div class="modal-body">
    <div class="form-group">
        <p>
            Введите данные для вопроса или предложения в поле ниже.
            Попытайтесь указать как можно больше информации по вашему вопросу или предложению.
            Служба поддержки ответить на указанный вами «e-mail:» в течении 24 часов.
        </p>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Имя Фамилия...">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail...">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Login...">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Referal code...">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Тема...">
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Сообщение..."></textarea>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <input class="b_orange" type="submit" value="Отправить">
            </div>
        </div>
    </div>
</div>