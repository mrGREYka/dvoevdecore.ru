<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

        <div class="project-form">

            <?php $form = ActiveForm::begin( ['options' => ['enctype' => 'multipart/form-data']] ); ?>

            <div class='col-sm-6'> 
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class='col-sm-6'> 
                <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>
            </div> 

            <div class='col-sm-6'> 
                <?= $form->field($model, 'image')->fileInput() ?>
            </div>
            <div class='col-sm-6'> 
                
            </div>

            <div class='col-sm-6'> 
                <?= $form->field($model, 'minbanner')->textInput(['maxlength' => true]) ?>
            </div>
            <div class='col-sm-6'> 
                <?= $form->field($model, 'banner')->textInput(['maxlength' => true]) ?>
            </div>
               

            <div class='col-sm-12'> 
                <?= $form->field($model, 'body')->widget(CKEditor::className(),[
                        'editorOptions' => [
                            'preset' => 'standart', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]); 
                ?>
            </div>

            <div class='col-sm-12'> 
                <?= $form->field($model, 'team')->widget(CKEditor::className(),[
                        'editorOptions' => [
                            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                            'inline' => false, //по умолчанию false
                        ],
                    ]); 
                ?>
            </div>

            <div class='col-sm-4'>
                <?= $form->field($model, 'iframe')->textInput() ?>
            </div>

            <div class='col-sm-12'>
                <?= $form->field($model, 'status')->checkBox( [ 0, 1 ] ) ?>
            </div>

            <div class='col-sm-12'>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn-mr waves-effect waves-light' : 'btn-mr waves-effect waves-light']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
       
