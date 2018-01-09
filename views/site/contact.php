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
            <div class="col-md-12">

                <?php $form = ActiveForm::begin([
                    'id' => 'contact-form',
                    'options' => [
                        'class' => 'main-contact-form-contact', 
                    ],
                    'fieldConfig' => [
                        'template' => "{input}\n{error}",
                        'labelOptions' => ['class' => ''],
                    ], 
                ]); ?>

                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>

                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Сообщение']) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-9">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn-mr waves-effect waves-light', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
            <div class="alert alert-success">
                Спасибо за Ваше обращение. Мы свяжимся с Вами ближайшее время.
            </div>
        <?php endif; ?>
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
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb96UnKVrepU3PsMlWaJKvFXifGvRqngA"></script>
   <script src="/js/map.js"></script>
    <!-- 
========================================
MAP AREA END FORM HERE
========================================
-->

    


