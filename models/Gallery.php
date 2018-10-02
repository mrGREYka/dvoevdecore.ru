<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $title
 */
class Gallery extends \yii\db\ActiveRecord
{
    public $image;
    //public $gallery;
    public $folderImg = 'images/store/';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 150],
            [['image'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'IDz',
            'title' => 'Наименование',
        ];
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function upload(){
        if ($this->validate()){
            foreach ($this->image as $file) {

                $path = $this->folderImg . $file->BaseName . '.' .$file->extension;
                $file->saveAs($path);
                $this->attachImage($path); 
            }
        
            return true;
        } else {
            return false;
        }
    }

    public function getImageHTML( ){
        $image = $this->getImage( );
        if($image){
            $src_img = $this->folderImg . $image->filePath;
            return \Yii::$app->view->render( '_galleryItem', [ 'src_img' => $src_img,  ] );
        }
    }

    public function getGalleryHTML( ){
        $gallery = $this->getImages( );
        return \Yii::$app->view->render( '_gallery', [ 'gallery' => $gallery, 'folderImg' => $this->folderImg, 'galleryID' => $this->id] );
    }
}
