<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="row">


            <?php
            NavBar::begin([
               'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            ?>
                <?php
                echo Nav::widget([
                    'items' => [
                        ['label' => 'О нас', 'url' => ['/site/index']],
                        ['label' => 'Наши услуги', 'url' => ['/site/index']],
                        ['label' => 'Портфолио', 'url' => ['/site/index']],
                        ['label' => 'Отзывы', 'url' => ['/site/index']],
                        ['label' => 'Контакты', 'url' => ['/site/index']],
                    ],
                    'options' => ['class' =>'navbar-nav justify-content-center'],
                ]);
                ?>
            <?php
                NavBar::end();
            ?>
    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Двое в декоре <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
