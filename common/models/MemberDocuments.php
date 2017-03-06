<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_documents".
 *
 * @property integer $id
 * @property integer $member_id
 * @property string $url
 * @property string $title
 */
class MemberDocuments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member_documents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'member_id', 'url', 'title'], 'required'],
            [['id', 'member_id'], 'integer'],
            [['url'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'member_id' => Yii::t('app', 'Member ID'),
            'url' => Yii::t('app', 'Url'),
            'title' => Yii::t('app', 'Title'),
        ];
    }
}
