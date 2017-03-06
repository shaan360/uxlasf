<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_reason".
 *
 * @property integer $nr_id
 * @property string $reason_type
 */
class AsfReason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_reason';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reason_type'], 'required'],
            [['reason_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nr_id' => 'Nr ID',
            'reason_type' => 'Reason Type',
        ];
    }
}
