<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

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
                
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a href="/" > Home </a></li>
                        <li><a href="about.html" > About </a></li>
                        <li><a href="typo.html" > Typo</a></li>
                        <li><a href="gallery.html" >Gallery</a></li>                        
                        <li><a href="contact.html" >Contact</a></li>
                    <div class="clearfix"></div>
                    </ul>
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
<!--content-->
<div class="content">
    <div class="content-top-at">
    <div class="container">
        <div class="content-top">
            <h1>Welcome</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
        </div>
        <div class="about-us">
            <div class="col-md-6 grids">
                <img class="img-responsive" src="images/we.jpg" alt="">
            </div>
            <div class="col-md-6 grids1">
                <h5>It is a long established fact that a reader will be distracted by the readable content of a page.</h5>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
                    , combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                <a href="#" class="hvr-rectangle-out">More</a>
            </div>
             <div class="clearfix"></div>
        </div>
        
        
    </div>
</div>

<div class="about-grid">
    <div class="container">
        <div class="col-md-3 about-grid1">
            <label>6800</label>
            <b></b>
            <span>popular Belief</span>
        </div>
        <div class="col-md-3 about-grid1">
            <label>1800</label>
            <b></b>
            <span>Adipiscing Elit</span>
        </div>
        <div class="col-md-3 about-grid1">
            <label>7000</label>
            <b></b>
            <span>Eiusmod Tempor</span>
        </div>
        <div class="col-md-3 about-grid1">
            <label>5500</label>
            <b></b>
            <span>Eaque Ipsa Quae</span>
        </div>
        <div class="clearfix"> </div>
 </div>
 </div>
 <div class="container">
    <div class="services">
        <div class="service-top">
                <h2>Services</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
            </div>
            <div class="service-bottom">
                <div class="col-md-6 service-grid-top">
                    <div class="col-md-2 service-grid1">
                        <img  src="images/se.png" alt="">
                    </div>
                    <div class="col-md-10 service-grid">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 service-grid-top">
                    <div class="col-md-2 service-grid1">
                        <img  src="images/se1.png" alt="">
                    </div>
                    <div class="col-md-10 service-grid">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="service-bottom">
                <div class="col-md-6 service-grid-top">
                    <div class="col-md-2 service-grid1">
                        <img  src="images/se2.png" alt="">
                    </div>
                    <div class="col-md-10 service-grid">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 service-grid-top">
                    <div class="col-md-2 service-grid1">
                        <img  src="images/se3.png" alt="">
                    </div>
                    <div class="col-md-10 service-grid">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
    </div>
 </div>
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
                        <li><a href="contact.html">Location</a></li>
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
