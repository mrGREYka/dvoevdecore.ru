<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">
    <div class="container">
        <div class="row">
            <div class='col-sm-12'>    
                <h1><?= Html::encode($this->title) ?></h1>
            </div>
            <?php 
                $image = $model->getImage();
                $gallery = $model->getImages();
            ?>
            <?php 
        
       // foreach($images as $img){ var_dump( $img ); echo '</br>'; echo '</br>';} ?>
            <div class='col-sm-12'> 
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'id',
                        'title',
                        [
                            'attribute' => 'image',
                            'value' => $model->getImageHTML( ),
                            'format' => 'html',       
                        ],
                        [
                            'attribute' => 'images',
                            'value' => $model->getGalleryHTML( ),

                            //"<img src='/images/store/{$image->filePath}'>",
                            'format' => 'html',       
                        ],
                    ],
                ]) ?>
            </div>
            <div class='col-sm-12'> 
                <p>
                    <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn-mr waves-effect waves-light']) ?>
                            

                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn-mr waves-effect waves-light',
                        'data' => [
                            'confirm' => 'Вы уверены что хотите удалить данный проект?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            <div class='col-sm-12'> 

        </div>
    </div>
</div>
