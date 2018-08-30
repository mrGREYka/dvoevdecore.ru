<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">
    <div class="container">
        <div class="row">

            <h1><?= Html::encode($this->title) ?></h1>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a('Создать проект', ['create'], ['class' => 'btn-mr waves-effect waves-light']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                     [
                        'attribute'=>'image',
                        'format'=>'raw',
                        'value'=> function($dataProvider){
                            return $dataProvider->getImageHTML( );
                        }
                    ],
                    'title',
                    'created',
                    //'status',
                    [
                        'attribute'=>'status',
                        'format'=>'raw',
                        'value'=> function($dataProvider){
                            return $dataProvider->status ? '<span class="text-success">Показывается</span>' : '<span class="text-danger">Не показывается</span>';
                        }
                    ],

                    /*[
                        'class' => 'yii\grid\CheckboxColumn', 
                        'header'=>'status',
                        'chekboxOptions'=>function($model, $key, $index, $column){
                            return $model->status ? [ 'cheked'=>"cheked" ] : [ ]; 
                        }
                    ],*/
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>        
</div>
