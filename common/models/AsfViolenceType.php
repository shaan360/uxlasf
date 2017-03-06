<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_violence_type".
 *
 * @property integer $vt_id
 * @property string $violence_type
 */
class AsfViolenceType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_violence_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['violence_type'], 'required'],
            [['violence_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vt_id' => 'Vt ID',
            'violence_type' => 'Violence Type',
        ];
    }
}
