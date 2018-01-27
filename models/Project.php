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
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'status'], 'required'],
            [['body'], 'string'],
            [['place'], 'string', 'max' => 50],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['iframe'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'place' => 'Место',
            'created' => 'Created',
            'status' => 'Status',
            'iframe' => 'Ссылка на YouTube',
        ];
    }
}
