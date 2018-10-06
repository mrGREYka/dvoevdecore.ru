<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


/* @var $this yii\web\View */
/* @var $model app\models\book */

$this->title = 'Внести издание';
$this->params['breadcrumbs'][] = ['label' => 'Перечень изданий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]); ?>

<div class="book-create">
	<div class="container">
        <div class="row">
			<?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
	</div>

</div>
