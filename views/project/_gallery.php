<?php use yii\helpers\Html; ?>
<div class='step-gallery'>
    <ul>
        <?php foreach ($gallery as $galleryItem): 
            $src_img = $folderImg . $galleryItem->filePath; ?>
            <li class='single-gallery-step'>
                <img src=<?= '/'. Html::encode("{$src_img}") ?> >
                <div class='gallery-view gallery-adminka'>
                    <a class='img-poppu' href=<?= '/'. Html::encode("{$src_img}") ?> >
                        <i class='fa fa-eye'></i>
                        <i class='fa fa-trash'></i>
                    </a>
                    
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>