<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\book */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Перечень изданий', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],]); ?>
<div class="book-view">
    <div class="container">
        <div class="row">
            <p>
                <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы уверены что хотите удалить издание из базы?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'count',
                ],
            ]) ?>
        </div>    
    </div>    
</div>
