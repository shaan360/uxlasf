<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_hospital".
 *
 * @property integer $nhc_id
 * @property string $hospital_type
 */
class AsfHospital extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_hospital';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hospital_type'], 'required'],
            [['hospital_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nhc_id' => 'Nhc ID',
            'hospital_type' => 'Hospital Type',
        ];
    }
}
