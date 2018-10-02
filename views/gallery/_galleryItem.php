<?php use yii\helpers\Html; ?>

<div class='step-gallery'>
    <ul>
        <li class='single-gallery-step'>
            <img src=<?= '/'. Html::encode("{$src_img}") ?> >
            <div class='gallery-view'>
                <a class='img-poppu' href=<?= '/'. Html::encode("{$src_img}") ?> >
                    <i class='fa fa-eye'></i>
                </a>
            </div>
        </li>
    </ul>
</div>