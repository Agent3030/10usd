<?php
use \yii\bootstrap\Modal;
use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
    <div id="full_page" class="full_page_index">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="logo pull-left"><a href="#"></a></div>
                        <div class="nav pull-right">
                            <div class="lang pull-left">
                                <div class="table">
                                    <div class="table_cell">
                                        <div class="dropdown">
                                            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?=Html::img('/img/rus.png', ['alt'=>''])?>
                                                <!-- <span class="caret"></span> -->
                                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                <li><?=Html::a((Html::img('/img/eng.png',['alt'=>''])),['#']) ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav_menu pull-left">
                                <div class="table">
                                    <div class="table_cell">
                                        <?php echo Nav::widget([
                                            'items' => [
                                                ['label' => Html::encode('Главная'), 'url' => ['/site/index']],
                                                ['label' => Html::encode('faq'), 'url' => ['/site/faq']],
                                                ['label' => Html::encode('Условия'), 'url' => ['/site/conditions']],
                                                '<li><a href ="#" data-toggle="modal" data-target="#ContactModal">Связаться</a></li>'
                                            ]
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="reg_b pull-left">
                                <div class="table">
                                    <div class="table_cell">
                                        <?=Html::a(Html::encode('Вход/Регистрация'), ['#'], ['data-toggle'=>'modal', 'data-target'=>'#LoginModal', 'class' => 'b_orange']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="nav_mobile row">
                <div class="lang col-xs-2">
                    <div class="table">
                        <div class="table_cell">
                            <div class="dropdown">
                                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?=Html::img('/img/rus.png',['alt'=>''])?>
                                    <!-- <span class="caret"></span> -->
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li><?=Html::a((Html::img('/img/eng.png',['alt'=>''])),['#']) ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="reg_b">
                        <?=Html::a(Html::encode('Вход/Регистрация'), ['url' => ['/user/sign-in/login']], ['class' => 'b_orange']);?>
                    </div>
                </div>
                <div class="nav_burg col-xs-2">
                    <div class="burg_butt"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <div class="mob_menu">
                        <?php echo Nav::widget([
                            'items' => [
                                ['label' => Html::encode('Главная'), 'url' => ['/site/index']],
                                ['label' => Html::encode('faq'), 'url' => ['/site/faq']],
                                ['label' => Html::encode('Условия'), 'url' => ['/site/conditions']],
                                ['label' => Html::encode('Связаться'), 'url' => ['/site/contacts']],
                            ]
                        ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <?php echo $content ?>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="nav_menu">
                        <div class="table">
                            <div class="table_cell">
                                <?php echo Nav::widget([
                                    'items' => [
                                        ['label' => Html::encode('faq'), 'url' => ['/site/faq']],
                                        ['label' => Html::encode('Условия'), 'url' => ['/site/conditions']],
                                        ['label' => Html::encode('Связаться'), 'url' => ['/site/contacts']],
                                    ]
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="share_wr">
                        <div class="table">
                            <div class="table_cell">
                                <p class="foot_p">Поделиться в соц. сетях:</p>
                                <div class="share42init"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="pay_box_wr">
                        <p class="foot_p">Платёжные решения:</p>
                        <div class="pay_wr">
                            <table>
                                <tr>
                                    <td rowspan="2"><?=Html::img('/img/pay1.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay2.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay3.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay4.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay5.png',['alt'=>''])?></td>
                                </tr>
                                <tr>
                                    <td><?=Html::img('/img/pay6.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay7.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay8.png',['alt'=>''])?></td>
                                    <td><?=Html::img('/img/pay9.png',['alt'=>''])?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 tac footer_cop">
                    (c) Copyright. <?php echo Yii::$app->name ?>. All rights Reserved. 2016
                </div>
            </div>
        </div>
    </footer>

<?php $this->endContent() ?>

<?php
Modal::begin([
    'options' => [
    'id'=>'ContactModal'],

]);
?>

<?php echo \frontend\components\widgets\ModalContact::widget();?>

<?php
Modal::end();
?>

<?php
Modal::begin([
    'options' => [
        'id'=>'LoginModal'],

]);
?>

<?php echo \frontend\components\widgets\ModalLogin::widget();?>

<?php
Modal::end();
?>
