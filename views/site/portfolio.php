<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

use yii\widgets\linkPager;

$this->title = 'Портфолио';
$this->params['breadcrumbs'][] = $this->title;
?>



  <!-- 
========================================
STEP PORTFOLIO ONE AREA START FORM HERE
========================================
-->
    <div class="stepportfilo-page-area section-pading">
        <div class="container">
            <div class="row">
                <div class="grid">
                    <?php foreach ($projects as $project): ?>
                        <div class='col-sm-4 col-xs-12 grid-item cat-1 cat-4'>
                            <div class='single-port'>
                                <img src='/images/portfolio/port-3/pp1.jpg' alt=''>
                                <div class='port-hover'>
                                    <a href='/site/project'><i class='fa fa-search'></i></a>
                                    <h5><?= Html::encode("{$project->title}") ?></h5>
                                </div>
                                <!-- end hover project -->
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination-step ">
                        <?= LinkPager::widget(['pagination' => $pagination]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 
========================================
STEP PORTFOLIO ONE AREA END FORM HERE
========================================
-->