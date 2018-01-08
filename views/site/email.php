<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div style="background: #ececec; padding: 30px 0; border: 1px solid #444;">
    <h1 style="color: #f2b702;text-transform:uppercase;font-size:20px;text-align: center;">Сообщение с формы "Получить консультацию"</h1>
    <p style="color: black;text-align: center;"><span style="font-weight:bold">От: </span><?= Html::encode($model->name) ?></p>
    <p style="color: black;text-align: center;"><span style="font-weight:bold">Почта: </span><?= Html::encode($model->email) ?></p>
    <p style="color: black;text-align: center;"><span style="font-weight:bold">Сообщение: </span><?= Html::encode($model->body) ?></p>
    <p style="color: black; text-align: center;">-----------------------</p>
    <p style="color: #f2b702;font-weight:bold;text-align:center;">это сообщение отправлено с сайта <?= Html::a('dvoevdecore.ru', Url::home('http')) ?></p>
</div>

