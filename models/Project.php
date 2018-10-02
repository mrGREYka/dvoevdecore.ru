<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $created
 * @property integer $status
 */
class Project extends \yii\db\ActiveRecord
{
    public $image;
   // public $gallery;
    public $folderImg = 'images/store/';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'minbanner', 'banner'], 'required'],
            [['banner'], 'string', 'max' => 50],
            [['minbanner'], 'string', 'max' => 50],
            [['body'], 'string'],
            [['team'], 'string'],
            [['gallery_id'], 'integer'],
            [['place'], 'string', 'max' => 50],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['iframe'], 'string'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 8 ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'image' => 'Фото',
            'gallery_id' => 'Галлерея',
            'banner' => 'Баннер',
            'minbanner' => 'Миниатюра',
            'images' => 'Галерея',
            'body' => 'Информация',
            'team' => 'Команда',
            'place' => 'Место',
            'created' => 'Дата создания',
            'status' => 'Статус',
            'iframe' => 'Ссылка на YouTube',
        ];
    }
    public function upload(){
        if ($this->validate()){
            $path = $this->folderImg . $this->image->BaseName . '.' .$this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            return true;
        } else {
            return false;
        }
    }

    public function getImageHTML( ){
        $image = $this->getImage( );
        $src_img = $this->folderImg . $image->filePath;
        return \Yii::$app->view->render( '_galleryItem', [ 'src_img' => $src_img,  ] );
    }

    public function getGalleryHTML( ){
        $gallery = $this->getImages( );
        return \Yii::$app->view->render( '_gallery', [ 'gallery' => $gallery, 'folderImg' => $this->folderImg, ] );
    }

    public function getGallery( )
    {
        return $this->hasOne( Gallery::className( ), [ 'id' => 'gallery_id' ] );
    }
}
