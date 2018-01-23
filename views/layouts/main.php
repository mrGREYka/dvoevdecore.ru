<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;
use yii\captcha\Captcha;
use app\models\ContactForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <!-- 
    ========================================
    STEP PRELOADER
    ========================================
      -->
    <div class="step-preloader-rapper">
        <div class="preloder-table">
            <div class="preloder-cell">
                <div class="preloder-logo mtb-30 text-center">
                    <img src="/images/logo/logo.png" alt="">
                </div>
                <div class="progress">
                    <div class="indeterminate"></div>
                </div>
            </div>
        </div>
    </div> 
    <!-- 
    ========================================
    STEP PRELOADER
    ========================================
      -->

    <!-- 
    ========================================
    STEP HEADER AREA START FORM HERE
    ========================================
      -->
    <header class="step-header home-one">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="top-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end top social icon -->
                    <div class="col-md-6 col-sm-8 col-xs-12">
                        <div class="top-contact">
                            <ul>
                                <li> <a href="#"><span><i class="fa fa-phone"></i></span>Call Us: +088-5522-999</a></li>
                                <li><a href="#"><span><i class="fa fa-envelope-o"></i></span>Send Mail: +088-5522-999</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mian-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-4">
                        <div class="logo">
                            <a href="/">
                                <img src="/images/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-9 col-sm-9 col-xs-4">
                        <div class="mobile-menu">
                            <a href="#" class="mobile-menu-step">
                                <img src="/images/menu.png" alt="">
                            </a>
                        </div>
                        <div class="main-menu">
                            <?php
                                echo Nav::widget([
                                    'items' => [
                                        ['label' => 'О нас', 'url' => ['/site/about']],
                                        ['label' => 'Наши услуги', 'url' => ['/site/service']],
                                        ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
                                        ['label' => 'Отзывы', 'url' => ['/site/comment']],
                                        ['label' => 'Контакты', 'url' => ['/site/contact']],
                                    ],
                                ]);
                            ?>
                        </div>

                    </div>
                    <!-- end main menu -->
                </div>
            </div>
        </div>
    </header>

    <!-- 
    ========================================
    STEP HEADER AREA START FORM HERE
    ========================================
      -->

    <!-- 
    ========================================
    MOBILE OFFCANVAS MENU
    ========================================
      -->
    <div class="mobile-menu-offcanvas hidden-sm hidden-md hidden-lg">
        <div class="mobile-offcanvas-close">
            <a href="#"> <i class="fa fa-close"></i></a>
        </div>
        <div class="mobile-main-menu">
            <?php
                echo Nav::widget([
                    'items' => [
                        ['label' => 'О нас', 'url' => ['/site/about']],
                        ['label' => 'Наши услуги', 'url' => ['/site/service']],
                        ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
                        ['label' => 'Отзывы', 'url' => ['/site/comment']],
                        ['label' => 'Контакты', 'url' => ['/site/contact']],
                    ],
                ]);
            ?>
        </div>
    </div>
    <div class="mobile-menu-overlay hidden-sm hidden-md hidden-lg"></div>
    <!-- 
    ========================================
    MOBILE OFFCANVAS MENU
    ========================================
      -->

    <?= Alert::widget() ?>
    <?= $content ?>

    <!-- 
    ========================================
    STEP FOOTER AREA START FORM HERE
    ========================================
    -->
    <footer class="step-main-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-footer">
                            <div class="footer-logo mtb-30">
                                <a href="index.html">
                                    <img src="/images/logo/logo.png" alt="">
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis eiusmod tempor incididunt ut labore dolore sit minim veniam elit.</p>
                            <ul class="footer-address">
                                <li> <span><i class="fa fa-home"></i></span>212, Inner circular road, USA</li>
                                <li> <span><i class="fa fa-envelope-o"></i></span> <a href="mailto:info@yourname.com"> info@yourname.com</a></li>
                                <li> <span><i class="fa fa-phone"></i></span> +990 - 523-521-88</li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-footer">
                            <h3 class="footer-title mtb-30">Quick Links</h3>
                            <ul class="quick-links">
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Services</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>FAQs</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Projects</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Startup</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="single-footer no">
                            <h3 class="footer-title mtb-30">Overview</h3>
                            <ul class="quick-links">
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Terms & Condition</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Pricing</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Testimonials</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Help</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-angle-double-right"></i>Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-footer no no-2">
                            <h3 class="footer-title mtb-30">Instagram</h3>
                            <ul class="footer-instra">
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i4.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i5.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i6.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i7.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"> <img src="/images/footer-instra/i8.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end single footer -->
                </div>
            </div>
        </div>
        <!-- end footer top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>Copyright &copy; 2016 Steps</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul>
                            <li>Follow Us:</li>
                            <li><a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="tooltipped" data-position="top" data-delay="50" data-tooltip="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- 
    ========================================
    STEP FOOTER AREA END FORM HERE
    ========================================
    -->


<?php $this->endBody() ?>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    <script>jQuery(document).on("ready", function () { alert( 'Ваше сообщение отправлено...' ); } );</script>    
<?php endif; ?>                
</body>
</html>
<?php $this->endPage() ?>
