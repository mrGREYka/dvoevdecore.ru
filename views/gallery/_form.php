<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class='col-sm-6'> 
        	<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-sm-6'> 
            <?= $form->field($model, 'image[]')->fileInput(['multiple' => true]) ?>
        </div>
        <div class='col-sm-12'> 
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

        <div class="col-md-12"><div class="section-title text-center"><h2 class="main-section-heading">Добавленные фотографии</h2></div></div>

        <div class='col-sm-12'> 
            <?= $model->getGalleryHTML( ); ?>
        </div>    

    </div>

    <?php ActiveForm::end(); ?>

</div>
