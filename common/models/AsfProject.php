<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_project".
 *
 * @property integer $np_id
 * @property string $project_type
 */
class AsfProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_type'], 'required'],
            [['project_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'np_id' => 'Np ID',
            'project_type' => 'Project Type',
        ];
    }
}
