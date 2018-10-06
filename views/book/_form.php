<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">
	 

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class='col-sm-6'>
    		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    	</div>
    

    
        <div class='col-sm-6'>
    		<?= $form->field($model, 'count')->textInput() ?>
    	</div>
    

	    <div class='col-sm-12'> 
	        <div class="form-group">
			    <div class="form-group">
			        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
			    </div>
	    	</div>
	    </div>
	</div>

    <?php ActiveForm::end(); ?>

</div>
