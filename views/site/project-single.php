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

    <div class="row">
        <div class="col-md-12 stb-30 mbt-30">
            <div class="projects-detials-active owl-carousel">
                <div class="single-project-detilas">
                    <img src="/images/portfolio/project-detils/1.jpg" alt="">
                </div>
                <!-- end single projects -->
                <div class="single-project-detilas">
                    <img src="/images/portfolio/project-detils/2.jpg" alt="">
                </div>
                <!-- end single projects -->
                <div class="single-project-detilas">
                    <img src="/images/portfolio/project-detils/1.jpg" alt="">
                </div>
                <!-- end single projects -->
                <div class="single-project-detilas">
                    <img src="/images/portfolio/project-detils/2.jpg" alt="">
                </div>
                <!-- end single projects -->
            </div>
            <!-- end projects details active -->
        </div>
        <div class="col-md-12">
            <div class="project-details-text">
                <h3><?= Html::encode("{$model->title}") ?></h3>
                <p><?= Html::encode("{$model->body}") ?></p>
            </div>
        </div>
    </div>
    <div class="stepproject-area section-pading2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="project-detials-date">
                        <p><span>Date : </span><?= Html::encode("{$dateProject}") ?></p>
                        <p><span>Client :  </span>Themforest</p>
                        <p><span>Categories :   </span>portfolio, psd, template, wordpress.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
========================================
PROJECTS DETIALS AREA END FORM HERE
========================================
-->

<div class="step-amazing-gallery section-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="main-section-heading">Фотогаллерея</h2>
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
                        <img src="/images/gallery/gl1.jpg" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <!-- end single gallery -->
                    <li class="single-gallery-step">
                        <img src="/images/gallery/gl1.jpg"" alt="">
                        <div class="gallery-view">
                            <a class="img-poppu" href="/images/gallery/gl1.jpg"">
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
    <div class="step-video section-pading">  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="main-section-heading">Видео со свадьбы</h2>
                    </div>
                </div>
                <!-- end section title -->
            </div>
        </div>  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <iframe width="100%" height="600" src=<?= Html::encode("{$model->iframe}") ?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>    
    </div>    
<?php endif; ?> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <div class="load-more text-center">
                    <a href="/portfolio" class="btn-mr waves-effect waves-light">Все проекты</a>
                </div>
                <div class="big-spacer"></div>
            </div>
        </div>
    </div>    
</div>        
    