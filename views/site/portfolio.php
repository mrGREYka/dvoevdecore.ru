<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

use yii\widgets\LinkPager;

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
            
                <h1 class="wms_align_center"><?=$this->title?></h1>
                <div class="grid">
                    <?php foreach ($projects as $project): ?>
                        <div class='col-sm-4'>
                            <div class='single-port'>
                                <img src=<?= Html::encode("{$project->banner}") ?> alt=''>
                                <div class='port-hover'>
                                    <a href= <?= Html::encode("/site/project-single?id={$project->id}") ?> ><i class='fa fa-search'></i></a>
                                    <h5><?= Html::encode("{$project->title}") ?></h5>
                                </div>
                                <!-- end hover project -->
                            </div>
                        </div>
                    <?php endforeach; ?>
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