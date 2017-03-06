<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_perpetrator".
 *
 * @property integer $nlp_id
 * @property string $perpetrator_type
 */
class AsfPerpetrator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_perpetrator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['perpetrator_type'], 'required'],
            [['perpetrator_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nlp_id' => 'Nlp ID',
            'perpetrator_type' => 'Perpetrator Type',
        ];
    }
}
