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


    <div class="stepproject-area section-pading2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 stb-30 mbt-30">
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
                <div class="col-md-6">
                    <div class="project-details-text">
                        <h3><?= Html::encode("{$model->title}") ?></h3>
                        <p><?= Html::encode("{$model->body}") ?></p>
                    </div>
                    <!-- end project deatils text -->                
                    <div class="project-detials-date">
                        <p><span>Date : </span><?= Html::encode("{$dateProject}") ?></p>
                        <p><span>Client :  </span>Themforest</p>
                        <p><span>Categories :   </span>portfolio, psd, template, wordpress.</p>
                    </div>
                    <a href="#!" class="btn-mr waves-effect waves-light">VIEW LIVE</a>
                </div>
            </div>
            <div class="big-spacer"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                            <iframe width="854" height="480" src=<?= Html::encode("{$model->iframe}") ?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                   
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