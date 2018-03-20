<?php

use app\widgets\Slider;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
/* @var $this yii\web\View */

$this->title = 'Двое в декоре';
?>

<?= Slider::widget([ 'sliders' => [ 'slider1' => '/images/slider/1.jpg', 'slider2' => '/images/slider/2.jpg', 'slider3' => '/images/slider/3.jpg', ] ]) ?>

<!--content-->
<!-- 
========================================
TYPOGRAPHY STYLE
========================================
  -->
<div class="elemnts-carosel section-pading2">
    <div class="container">
        <div class="big-spacer"></div>
        <!-- end big spacer -->
        <div class="row">
            <h2 class="elemnt-heading mtb-30 text-center">Наши проекты</h2>
            <div class="related-project-active owl-carousel">
                <div class="col-md-4">
                    <div class="single-related-project">
                        <img src="/images/portfolio/project-detils/r1.jpg" alt="">
                        <h3><a href="/site/project">UI Branding Design</a></h3>
                    </div>
                </div>
                <!-- single related project -->
                <div class="col-md-4">
                    <div class="single-related-project">
                        <img src="/images/portfolio/project-detils/r2.jpg" alt="">
                        <h3><a href="/site/project">Box UI Branding Design</a></h3>
                    </div>
                </div>
                <!-- single related project -->
                <div class="col-md-4">
                    <div class="single-related-project">
                        <img src="/images/portfolio/project-detils/r3.jpg" alt="">
                        <h3><a href="/site/project">Global Branding Project</a></h3>
                    </div>
                </div>
                <!-- single related project -->
                <div class="col-md-4">
                    <div class="single-related-project">
                        <img src="/images/portfolio/project-detils/r1.jpg" alt="">
                        <h3><a href="/site/project">UI Branding Design</a></h3>
                    </div>
                </div>
                <!-- single related project -->
            </div>
            <!-- end related project active -->
        </div>
        <!-- end row -->
        <div class="big-spacer"></div>
        <!-- end big spacer -->
    </div>
</div>

<!-- 
========================================
SERVICES
========================================
  -->
<div class="elemnts-services section-pading2">
    <div class="container">
        <div class="row">
            <h2 class="elemnt-heading mtb-30 text-center">Наши услуги</span>
            </h2>
            <div class="col-md-3 col-sm-6 col-xs-12 stb-30 mbt-30">
                <div class="home-3-single-services">
                    <i class="fa fa-cogs"></i>
                    <h5><span>EASY CUSTOMIZE</span></h5>
                </div>
            </div>
            <!-- end single services -->
            <div class="col-md-3 col-sm-6 col-xs-12 stb-30 mbt-30">
                <div class="home-3-single-services">
                    <i class="fa fa-comments"></i>
                    <h5><span>BUSINESS CONSULTING</span></h5>
                </div>
            </div>
            <!-- end single services -->
            <div class="col-md-3 col-sm-6 col-xs-12 mbt-30">
                <div class="home-3-single-services">
                    <i class="fa fa-users"></i>
                    <h5><span>Degital Strategy</span></h5>
                </div>
            </div>
            <!-- end single services -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="home-3-single-services">
                    <i class="fa fa-pencil"></i>
                    <h5><span>Degital Strategy</span></h5>
                </div>
            </div>
            <!-- end single services -->
        </div>
        <div class="big-spacer"></div>
    </div>
</div>
<!-- 
========================================
SERVICES
========================================
  -->        

 <!-- 
========================================
STEP SERVICES AREA START FORM HERE
========================================
-->

    <div class="step-services section-pading home-two about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="main-section-heading">Наши преимущества</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <div class="col-md-4 mp-0 col-sm-6 col-xs-12  mbt-30">
                    <div class="step-single-services waves-effect waves-light-1">
                        <i class="fa fa-briefcase"></i>
                        <h2 class="services-title2">Professional Team</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore dolore magna aliqua. </p>
                    </div>
                </div>
                <!-- end single services -->
                <div class="col-md-4 mp-0 col-sm-6 col-xs-12  mbt-30">
                    <div class="step-single-services waves-effect waves-light-1">
                        <i class="fa fa-pencil"></i>
                        <h2 class="services-title2">Refund Policy</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore dolore magna aliqua. .</p>
                    </div>
                </div>
                <!-- end single services -->
                <div class="col-md-4 mp-0 col-sm-6 col-xs-12  mbt-30">
                    <div class="step-single-services waves-effect waves-light-1">
                        <i class="fa fa-map-marker"></i>
                        <h2 class="services-title2">Remote Support</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore dolore magna aliqua. .</p>
                    </div>
                </div>
                <!-- end single services -->
                <div class="col-md-4 mp-0 col-sm-6 col-xs-12  mbt-30">
                    <div class="step-single-services waves-effect waves-light-1">
                        <i class="fa fa-share-alt"></i>
                        <h2 class="services-title2">Social Media Support</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore dolore magna aliqua. .</p>
                    </div>
                </div>
                <!-- end single services -->
                <div class="col-md-4 mp-0 col-sm-6 col-xs-12 mbt-30">
                    <div class="step-single-services waves-effect waves-light-1">
                        <i class="fa fa-envelope"></i>
                        <h2 class="services-title2">Email Support</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore dolore magna aliqua. .</p>
                    </div>
                </div>
                <!-- end single services -->
                <div class="col-md-4 mp-0 col-sm-6 col-xs-12">
                    <div class="step-single-services waves-effect waves-light-1">
                        <i class="fa fa-clock-o"></i>
                        <h2 class="services-title2">24/7 Support</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore dolore magna aliqua. .</p>
                    </div>
                </div>
                <!-- end single services -->
            </div>
        </div>
    </div>
    <!-- 
========================================
STEP SERVICES AREA END FORM HERE
========================================
--> 

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
                        <h2 class="section-heading2">Получить консультацию</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
            <!-- end row -->
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
                            'labelOptions' => ['class' => 'wms'],
                        ], 
                    ]); 
                    ?>
                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>

                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email']) ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'placeholder' => 'Сообщение']) ?>

                        

                        <?= $form->field($model, 'reCaptcha')->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha::className(),
                            ['siteKey' => '6LeQl00UAAAAAHZDmCcTZuvviV4xUuPcU29D-69d']
                        ) ?>

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




