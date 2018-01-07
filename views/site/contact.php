<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
?>

<!-- 
========================================
GET IN TOUCH TWO AREA START FORM HERE
========================================
-->
    <div class="step-get-in-touch section-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="section-heading2">GE<span class="sec-bar-2">T IN TOU</span>CH</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <!-- end row -->
            <div class="row">
                    <div class="contact-address">
                            <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12 mbt-30">
                                <div class="single-contact-address">
                                <div class="media">
                                    <div class="pull-left">
                                        <div class="con-i">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>+088-555-222-44</h5>
                                        <h5>+099-777-333-55</h5>
                                    </div>

                                </div>
                            </div>
                            </div>
                            <!-- end single contact address -->
                            <div class="col-md-3 col-sm-4 col-xs-12 mbt-30">
                                <div class="single-contact-address">
                                <div class="media">
                                    <div class="pull-left">
                                       <div class="con-i">
                                            <i class="fa fa-paper-plane"></i>
                                       </div>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="mailto:iinfo@gmail.com">info@gmail.com</a></h5>
                                        <h5><a href="mailto:www.yourweb.com">www.yourweb.com</a></h5>
                                    </div>

                                </div>
                            </div>
                            </div>
                            <!-- end single contact address -->
                            <div class="col-md-3 col-sm-4 col-xs-12">
                               <div class="single-contact-address">
                                <div class="media">
                                    <div class="pull-left">
                                        <div class="con-i">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>212 , Inner circular road,</h5>
                                        <h5>New York City, U.S.A.</h5>
                                    </div>

                                </div>
                            </div> 
                            </div>
                            <!-- end single contact address -->
                    </div>
            </div> <!-- end row -->
            <div class="big-spacer2"></div> <!-- end big spacer -->
            <div class="row">
               <form action="#" class="main-contact-form-contact">
                <div class="col-md-6">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Subject">
                </div>
                <div class="col-md-6">
                    <textarea placeholder="Message"></textarea>
                    <div class="text-right">
                        <a href="#!" class="btn-mr waves-effect waves-light">SEND</a>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>


    <!-- 
========================================
GET IN TOUCH TWO AREA START FORM HERE
========================================
-->
    <!-- 
========================================
MAP AREA START FORM HERE
========================================
-->
   <div class="contact-page-map-area">
       <div id="googleMap"></div>
   </div>
    <!-- 
========================================
MAP AREA END FORM HERE
========================================
-->
<div class="container">
    <div class="big-spacer2"></div> <!-- end big spacer -->
    <div class="site-contact">
        <h2><?= Html::encode($this->title) ?></h2>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Спасибо за Ваше обращение. Мы свяжимся с Вами ближайшее время.
            </div>

        <?php else: ?>

            <p>
                Воспользуйтесь формой обратной связи.
            </p>

            <div class="row">
                <div class="col-lg-5">

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>

        <?php endif; ?>
    </div>
</div>

