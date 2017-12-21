<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;

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


    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="images/logo.png" alt="" /></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container">
                <div class="top-nav">
                    <?php
                        echo Nav::widget([
                            'items' => [
                                ['label' => 'О нас', 'url' => ['/site/about']],
                                ['label' => 'Наши услуги', 'url' => ['/site/service']],
                                ['label' => 'Портфолио', 'url' => ['/site/portfolio']],
                                ['label' => 'Отзывы', 'url' => ['/site/comment']],
                                ['label' => 'Контакты', 'url' => ['/site/contact']],
                            ],
                            'options' => ['class' =>'nav-pills nav-justified'],
                        ]);
                    ?>    

                </div>          
        </div>
        <div class="container">
    <!--//header-->
            <div class="banner">
                <div class="slider">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="col-md-8 banner-left">
                                        <img  class="img-responsive" src="images/banner.jpg" alt="">
                                    </div>
                                    <div class="col-md-4 banner-right">
                                        <h3>Lorem Ipsum is simply dummy text </h3>
                                        <p>Allquam tincidunt mauris cu risus</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="col-md-8 banner-left">
                                        <img class="img-responsive" src="images/banner1.jpg" alt="">
                                    </div>
                                    <div class="col-md-4 banner-right">
                                        <h3>Lorem Ipsum is simply dummy text </h3>
                                        <p>Allquam tincidunt mauris cu risus</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="col-md-8 banner-left">
                                        <img class="img-responsive" src="images/banner2.jpg" alt="">
                                    </div>
                                    <div class="col-md-4 banner-right">
                                        <h3>Lorem Ipsum is simply dummy text </h3>
                                        <p>Allquam tincidunt mauris cu risus</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

 <!--footer-->
 <div class="footer">
        <div class="container">
            <div class="footer-top-at">
            
                <div class="col-md-4 amet-sed">
                <h4>MORE INFO</h4>
                <ul class="nav-bottom">
                        <li><a href="#">How to order</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Membership</a></li> 
                    </ul>   
                </div>
                <div class="col-md-4 amet-sed ">
                <h4>CONTACT US</h4>
                
                    <p>
Contrary to popular belief</p>
                    <p>The standard chunk</p>
                    <p>office:  +12 34 995 0792</p>
                    
                </div>
                <div class="col-md-4 amet-sed">
                    <h4>Follow Us</h4>
                    <ul class="social">
                        <li><a href="#"><i> </i></a></li>                       
                        <li><a href="#"><i class="google"> </i></a></li>
                        <li><a href="#"><i class="dribbble"> </i></a></li>
                        <li><a href="#"><i class="twitter"> </i></a></li>
                        
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    <div class="footer-class">
        <div class="wms_link">
            <span class="wms_site_link">cайт создан  
                <a title="перейти на сайт студии WEBMASTER STUDIO" target="_blank" href="http://webmaster-studio.ru/">Webmaster Studio</a>
            </span>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
