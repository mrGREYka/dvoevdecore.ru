<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gallery */

$this->title = 'Create Gallery';
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-create">
	<div class="container">
    	<div class="row">	
			<h1><?= Html::encode($this->title) ?></h1>
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
    	</div>
    </div>
</div>
