<?php
/**
 * Created by PhpStorm.
 * User: dzozulya
 * Date: 31.05.16
 * Time: 16:52
 */
use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;
?>

<section class="static_sec">
    <?php echo \frontend\components\widgets\TopRef::widget(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="left_side_list">
                    <ul>
                        <li class="active"><a href="#">Правила и условия</a></li>
                        <li><a href="#">Конфиденциальность</a></li>
                        <li><a href="#">Безопасность</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page_title tac">Условия и правила</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="faq_wr rules_wr">
                            <div class="faq_item">
                                <div class="faq_title">
                                    Общие условия
                                </div>
                                <div class="faq_text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                </div>
                            </div>
                            <div class="faq_item">
                                <div class="faq_title">
                                    Права и обязанности сторон
                                </div>
                                <div class="faq_text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                </div>
                            </div>
                            <div class="faq_item">
                                <div class="faq_title">
                                    Авторское право
                                </div>
                                <div class="faq_text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                </div>
                            </div>
                            <div class="faq_item">
                                <div class="faq_title">
                                    Ответственность
                                </div>
                                <div class="faq_text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
