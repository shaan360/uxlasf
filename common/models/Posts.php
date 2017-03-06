<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property integer $author_id
 * @property integer $status
 * @property string $updated_on
 * @property string $created_on
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'body', 'status', 'updated_on'], 'required'],
            [['body'], 'string'],
            [['author_id', 'status'], 'integer'],
            [['updated_on', 'created_on'], 'safe'],
            [['title'], 'string', 'max' => 99],
            [['slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'body' => Yii::t('app', 'Body'),
            'author_id' => Yii::t('app', 'Author ID'),
            'status' => Yii::t('app', 'Status'),
            'updated_on' => Yii::t('app', 'Updated On'),
            'created_on' => Yii::t('app', 'Created On'),
        ];
    }
}
