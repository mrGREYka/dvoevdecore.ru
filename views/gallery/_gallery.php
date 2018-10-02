<?php use yii\helpers\Html; ?>
<div class='step-gallery'>
    <ul>
        <?php foreach ($gallery as $galleryItem): 
            $imgID = $galleryItem->getPrimaryKey();
        
            $src_img = $folderImg . $galleryItem->filePath; ?>
            <li class='single-gallery-step'>
                <img src=<?= '/'. Html::encode("{$src_img}") ?> >
                <div class='gallery-view gallery-adminka'>
                    <a class='img-poppu' href=<?= '/'. Html::encode("{$src_img}") ?> >
                        <i class='fa fa-eye'></i>

                        
                        


                            
                            <a href=<?= '/gallery/imagedel?id='. Html::encode( $galleryID ) .'&idimage=' . Html::encode( $imgID ) ?> title="Удалить" aria-label="Удалить" data-pjax="0" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post">
                                <i class='fa fa-trash'></i></a>
                        
                    </a>
                    
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>