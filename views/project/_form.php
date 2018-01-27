<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

        <div class="project-form">

        	  

            <?php $form = ActiveForm::begin(); ?>

            <div class='col-sm-4'> 
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class='col-sm-4'> 
                <?= $form->field($model, 'banner')->textInput(['maxlength' => true]) ?>
            </div>
            <div class='col-sm-4'> 
                <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>
            </div>    

            <div class='col-sm-12'> 
                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
            </div>

            <div class='col-sm-4'>
                <?= $form->field($model, 'iframe')->textInput() ?>
            </div>

            <div class='col-sm-12'>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn-mr waves-effect waves-light' : 'btn-mr waves-effect waves-light']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
       
