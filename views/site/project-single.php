<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Детали проекта';
$dateProject = Yii::$app->formatter->format($model->created, 'datetime');
?>

<!-- 
========================================
PROJECTS DETIALS AREA START FORM HERE
========================================
-->
<div class="wms_project_wrapper">
    <div class="row wms_project_banner">
        <div class="col-md-12">
            <div class="single-project-detilas">
                <img src=<?= Html::encode("{$model->banner}") ?> alt="" >
            </div>
        </div>
        <div class="col-md-12">
            <div class="project-details-text">
                <h1><?= Html::encode("{$model->title}") ?></h1>
                <p><?= Html::encode("{$model->place}") ?></p>
            </div>
        </div>
    </div>

    <div class="wms_divider_1"></div>

    <div class="section-pading2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="section-title text-center">
                        <h2 class="main-section-heading">История</h2>
                    </div>
                    <?= $model->body ?>
                </div>
            </div>
        </div>
    </div>


    <?php if ( trim( $model->team ) != '' ): ?>
        <div class="section-pading2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-section-heading">Команда</h2>
                        </div>
                        <div class="project-detials-date text-center">
                            <?= $model->team ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>    
    <!-- 
========================================
PROJECTS DETIALS AREA END FORM HERE
========================================
-->

    <div class="step-amazing-gallery section-pading2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-section-heading">Фотогалерея</h2>
                        </div>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
            <!-- end container -->
            <div class="container">
                <div class="step-gallery">
                    <ul>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_1_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_1.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_2_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_2.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_3_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_3.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_4_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_4.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_5_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_5.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_6_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_6.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_7_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_7.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_8_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_8.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_9_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_9.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_10_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_10.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_11_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_11.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_12_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_12.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_13_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_13.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_14_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_14.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_15_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_15.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_16_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_16.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_17_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_17.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_18_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_18.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <li class="single-gallery-step">
                            <img src="/images/gallery/30/wms_port_sasha_dasha_19_p.jpg" alt="">
                            <div class="gallery-view">
                                <a class="img-poppu" href="/images/gallery/30/wms_port_sasha_dasha_19.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </li>
                        <!-- end single gallery -->
                    </ul>
                </div>
            </div>    
            <!-- end gallery  -->
        </div>

        <!-- 
    ========================================
    STEP TEAMONE AREA END FORM HERE
    ========================================
    -->

    <?php if ( trim( $model->iframe ) != '' ): ?>
        <div class="step-video section-pading2">  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="main-section-heading">Видео со свадьбы</h2>
                        </div>
                        <div class="text-center">
                            <iframe width="100%" height="600" src=<?= Html::encode("{$model->iframe}") ?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    <?php endif; ?> 

        <div class="wms_divider_1"></div>

        <div class="step-social-icon section-pading2 social-elements-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mtb">
                        <div class="step-social-icon">
                            <div class="section-title text-center">
                                <h2 class="main-section-heading">Поделиться</h2>
                            </div>
                            
                            <a href="#" class="demo-size icon-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="demo-size icon-facebook"><i class="fa fa-vk"></i></a>
                            <a href="#" class="demo-size icon-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="demo-size icon-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="demo-size icon-behance"><i class="fa fa-behance"></i></a>
                            <a href="#" class="demo-size icon-dribbble"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="demo-size icon-flickr"><i class="fa fa-flickr"></i></a>
                            <a href="#" class="demo-size icon-instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="demo-size icon-linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="demo-size icon-pinterest"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" class="demo-size icon-skype"><i class="fa fa-skype"></i></a>
                            <a href="#" class="demo-size icon-slack"><i class="fa fa-slack"></i></a>
                            <a href="#" class="demo-size icon-tumblr"><i class="fa fa-tumblr"></i></a>
                            <a href="#" class="demo-size icon-vimeo"><i class="fa fa-vimeo"></i></a>
                            <a href="#" class="demo-size icon-vine"><i class="fa fa-vine"></i></a>
                            <a href="#" class="demo-size icon-youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    
                
                </div>
            </div>
        </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <div class="big-spacer"></div>
                    <div class="load-more text-center">
                        <a href="/portfolio" class="btn-mr waves-effect waves-light">Все проекты</a>
                    </div>
                    <div class="big-spacer"></div>
                </div>
            </div>
        </div>    
    </div>   
</div>   <!-- wrapper -->           
    