<?php

use yii\helpers\Html;

?>


<!-- 
========================================
STEP SLIDER AREA START FORM HERE
========================================
  -->
<div class="home-one-slider">
    <div class="slider-active-home-one owl-carousel">

        <?php foreach ($sliders as $slider): ?>

        <div class="single-slide" style="background-image:url(<?= Html::encode("{$slider}") ?>)">
            <div class="slider-table">
                <div class="slider-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slide-content text-center">
                                    <h2>ДВОЕ В ДЕКОРЕ</h2>
                                    <p>Организация свадеб, тержеств, корпоративов.</p>
                                    <a href="/portfolio" class="btn-mr waves-effect waves-light">Наши проекты</a>
                                    <a href="/site/service" class="btn-mr white waves-effect waves-teal">Наши услуги</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
    