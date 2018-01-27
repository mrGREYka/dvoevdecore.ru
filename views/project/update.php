<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Редактирование проекта';
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-update">
	<div class="container">
    	<div class="row">
		    <h1><?= Html::encode($this->title) ?></h1>
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
	</div>
</div>


</div>
