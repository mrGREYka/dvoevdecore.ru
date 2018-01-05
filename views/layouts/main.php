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
                            <a href="index.html">
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
                            <ul>
                                <li class="active has-child"><a href="#">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index-home2.html">Home Two</a></li>
                                        <li><a href="index-home-3.html">Home Three</a></li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="#">ABOUT US </a>
                                    <ul class="sub-menu">
                                        <li><a href="about-one.html">About One</a></li>
                                        <li><a href="about-two.html">About Two</a></li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="#">PORFOLIO </a>
                                    <ul class="sub-menu">
                                        <li class="has-child"><a href="#!">masonry</a>
                                            <ul class="menu-sub">
                                                <li><a href="portfolio_1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio_2.html">Portfolio 2</a></li>
                                                <li><a href="portfolio_4.html">Portfolio 3</a></li>
                                                <li><a href="portfolio_05.html">Portfolio 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child"><a href="#!">Normal</a>
                                            <ul class="menu-sub">
                                                <li><a href="portfolio_3.html">portfolio 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="#">SERVICE </a>
                                    <ul class="sub-menu">
                                        <li><a href="services-one.html">service One</a></li>
                                        <li><a href="services-two.html">service Two</a></li>
                                        <li><a href="services-elements.html">Service Elements</a></li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="#">BLOG </a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-leftsidebar.html">Blog left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right Sidebar</a></li>
                                        <li><a href="single-blog-full-width.html">single full width</a></li>
                                        <li><a href="single-blog-left-sidebar.html">single left sidebar</a></li>
                                        <li><a href="single-blog.html">single Right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="#">PAGES </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <h3>Elements <span class="clr-span">One</span></h3>
                                            <a href="accrodian.html">Accordion/Toggle</a>
                                            <a href="alerts.html">Alerts</a>
                                            <a href="button.html">Button</a>
                                            <a href="tab.html">tab</a>
                                            <a href="social-icon.html">Social Icon</a>
                                            <a href="typography.html">typography</a>
                                            <a href="form.html">Form</a>

                                        </li>
                                        <li>
                                            <h3>Elements <span class="clr-span">Two</span></h3>
                                            <a href="services-elements.html">Services</a>
                                            <a href="all-tem.html">tem</a>
                                            <a href="carosel.html">Carosel</a>
                                            <a href="call-to-action.html">call to action</a>
                                            <a href="subscribe.html">Subscribe</a>
                                            <a href="funfact.html">Fun Fact</a>
                                            <a href="gallery.html">gallery</a>
                                        </li>
                                        <li>
                                            <h3>Elements <span class="clr-span">Three</span></h3>
                                            <a href="main-shop.html">Shop page <span class="label label-primary">new</span></a>
                                            <a href="shop-list.html">shop list view <span class="label label-primary">new</span></a>
                                            <a href="shop-grid.html">shop grid view <span class="label label-primary">new</span></a>
                                            <a href="shop-details.html">shop details <span class="label label-primary">new</span></a>
                                            <a href="shopping-cart.html">cart <span class="label label-primary">new</span></a>
                                            <a href="checkout.html">checkout <span class="label label-primary">new</span></a>
                                            <a href="my-account.html">account <span class="label label-primary">new</span></a>

                                        </li>
                                        <li>
                                            <h3>Elements <span class="clr-span">Four</span></h3>
                                            <a href="comming-soon.html">Comming Soon <span class="label label-primary">EX</span></a>
                                            <a href="events.html">Event <span class="label label-primary">EX</span></a>
                                            <a href="single-events.html">Event details <span class="label label-primary">EX</span></a>
                                            <a href="faq_left-seidebar.html">Faq left sidebar</a>
                                            <a href="faq_right_sidebar.html">Faq Right sidebar</a>
                                            <a href="progressbar.html">progressbar</a>
                                            <a href="price-table.html">price table</a>
                                        </li>
                                        <li>
                                            <h3>Elements <span class="clr-span">five</span></h3>
                                            <a href="project_detials.html">project details</a>
                                            <a href="404.html">404</a>
                                            <a href="team-one.html">team one</a>
                                            <a href="team-two.html">team two</a>
                                            <a href="single-team.html">single team</a>
                                            <a href="services-one.html">Service one</a>
                                            <a href="services-two.html">Service two</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-child"><a href="#">CONTACT </a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">contact us 1</a></li>
                                        <li><a href="contactus_2.html">contact us 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end main menu -->
                    <div class="col-md-1 col-sm-1 col-xs-4">
                        <div class="search-area">
                            <a href="#" class="click-serach-step">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
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
            <ul>
                <li class="has-child-3"><a href="#" class="waves-effect waves-light2">home</a>
                    <ul class="sub-menu-3">
                        <li><a href="index.html" class="waves-effect waves-light3">home 1</a></li>
                        <li><a href="index-home2.html" class="waves-effect waves-light3">home 2</a></li>
                        <li><a href="index-home-3.html" class="waves-effect waves-light3">home 3</a></li>
                    </ul>
                </li>
                <li class="has-child-3"><a href="#" class="waves-effect waves-light2">about us</a>
                    <ul class="sub-menu-3">
                        <Li><a href="about-one.html" class="waves-effect waves-light3">about 1</a></Li>
                        <Li><a href="about-two.html" class="waves-effect waves-light3">about 2</a></Li>
                    </ul>
                </li>
                <li class="has-child-3"><a href="#" class="waves-effect waves-light2">portfolio</a>
                    <ul class="sub-menu-3">
                        <li><a href="portfolio_1.html" class="waves-effect waves-light3">portfolio 1</a></li>
                        <li><a href="portfolio_2.html" class="waves-effect waves-light3">portfolio 2</a></li>
                        <li><a href="portfolio_3.html" class="waves-effect waves-light3">portfolio 3</a></li>
                        <li><a href="portfolio_4.html" class="waves-effect waves-light3">portfolio 4</a></li>
                        <li><a href="portfolio_05.html" class="waves-effect waves-light3">portfolio 5</a></li>
                    </ul>
                </li>
                <li class="has-child-3"><a href="#" class="waves-effect waves-light2">Services</a>
                    <ul class="sub-menu-3">
                        <li><a href="services-one.html" class="waves-effect waves-light3">Services 1</a></li>
                        <li><a href="services-two.html" class="waves-effect waves-light3">Services 2</a></li>
                        <li><a href="services-elements.html" class="waves-effect waves-light3">all services</a></li>
                    </ul>
                </li>
                <li class="has-child-3"><a href="#" class="waves-effect waves-light2">blog</a>
                    <ul class="sub-menu-3">
                        <li><a href="blog-grid.html" class="waves-effect waves-light3">Blog Grid</a></li>
                        <li><a href="blog-leftsidebar.html" class="waves-effect waves-light3">Blog left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html" class="waves-effect waves-light3">Blog right Sidebar</a></li>
                        <li><a href="single-blog-full-width.html" class="waves-effect waves-light3">single full width</a></li>
                        <li><a href="single-blog-left-sidebar.html" class="waves-effect waves-light3">single left sidebar</a></li>
                        <li><a href="single-blog.html" class="waves-effect waves-light3">single Right sidebar</a></li>
                    </ul>
                </li>
                <li class="has-child-3"><a href="#" class="waves-effect waves-light2">pages</a>
                    <ul class="sub-menu-3">
                        <li> <a href="main-shop.html" class="waves-effect waves-light3">Shop page <span class="label label-success">new</span></a></li>
                        <li><a href="shop-list.html" class="waves-effect waves-light3">shop list view <span class="label label-success">new</span></a></li>
                        <li><a href="shop-grid.html" class="waves-effect waves-light3">shop grid view <span class="label label-success">new</span></a></li>
                        <li><a href="shop-details.html" class="waves-effect waves-light3">shop details <span class="label label-success">new</span></a></li>
                        <li><a href="shopping-cart.html" class="waves-effect waves-light3">cart <span class="label label-success">new</span></a></li>
                        <li><a href="checkout.html" class="waves-effect waves-light3">checkout <span class="label label-success">new</span></a></li>
                        <li><a href="my-account.html" class="waves-effect waves-light3">account <span class="label label-success">new</span></a></li>
                        <li><a href="comming-soon.html">Comming Soon <span class="label label-success">EX</span></a></li>
                        <li><a href="events.html">Event <span class="label label-success">EX</span></a></li>
                        <li><a href="single-events.html">Event details <span class="label label-success">EX</span></a></li>
                        <li><a href="404.html">404 <span class="label label-success">EX</span></a></li>
                    </ul>
                </li>
                <li><a href="contact.html" class="waves-effect waves-light2">contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mobile-menu-overlay hidden-sm hidden-md hidden-lg"></div>
    <!-- 
    ========================================
    MOBILE OFFCANVAS MENU
    ========================================
      -->

    <!-- 
    ========================================
    HIDDEN MODAL AREA
    ========================================
      -->

    <div class="search-rapper-step">
        <div class="search-close">
            <a class="serc-clse" href="#">
                <span></span>
                <span></span>
            </a>
        </div>
        <div class="search-table">
            <div class="search-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="step-serach-main">
                                <form action="#!">
                                    <input type="text" placeholder="Serach...">
                                    <button type="submit" class="waves-effect waves-light"> <i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- 
    ========================================
    HIDDEN MODAL AREA
    ========================================
      -->


    <!-- 
    ========================================
    STEP SLIDER AREA START FORM HERE
    ========================================
      -->
    <div class="home-one-slider">
        <div class="slider-active-home-one owl-carousel">
            <div class="single-slide" style="background-image:url(/images/slider/1.jpg)">
                <div class="slider-table">
                    <div class="slider-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slide-content text-center">
                                        <h2>WE BUILD UP YOUR BUSINESS</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        <a href="#!" class="btn-mr waves-effect waves-light">SEE MORE</a>
                                        <a href="#!" class="btn-mr white waves-effect waves-teal">OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slider -->
            <div class="single-slide" style="background-image:url(/images/slider/2.jpg)">
                <div class="slider-table">
                    <div class="slider-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slide-content text-center">
                                        <h2>WE BUILD UP YOUR BUSINESS</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        <a href="#!" class="btn-mr waves-effect waves-light">SEE MORE</a>
                                        <a href="#!" class="btn-mr white waves-effect waves-teal">OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slider -->
            <div class="single-slide" style="background-image:url(/images/slider/3.jpg)">
                <div class="slider-table">
                    <div class="slider-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="slide-content text-center">
                                        <h2>WE BUILD UP YOUR BUSINESS</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        <a href="#!" class="btn-mr waves-effect waves-light">SEE MORE</a>
                                        <a href="#!" class="btn-mr white waves-effect waves-teal">OUR SERVICES</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end single slider -->
        </div>
        <!-- slider active -->
    </div>
    

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

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


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
