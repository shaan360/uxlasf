<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "units".
 *
 * @property integer $id
 * @property string $unit_no
 * @property string $unit_type
 * @property string $category
 * @property integer $floor
 * @property string $unit_map
 * @property integer $status
 * @property string $last_update
 * @property string $timestamp
 * @property integer $created_by
 * @property string $updated_by
 * @property integer $is_sold
 * @property string $comments
 */
class Units extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'units';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit_type', 'size', 'no_beds','unit_no','floor'], 'required'],
            [['floor', 'status', 'created_by', 'is_sold'], 'integer'],
            [['last_update','updated_by', 'timestamp'], 'safe'],
            [['comments'], 'string'],
            [['unit_no', 'category'], 'string', 'max' => 45],
            [['unit_type'], 'string', 'max' => 256],
            [['unit_map'], 'string', 'max' => 200],
            [['unit_no'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unit_no' => 'Unit No',
            'size' => 'Size',
            'no_beds' => 'No of Beds',
            'unit_type' => 'Unit Type',
            'category' => 'Category',
            'floor' => 'Floor',
            'unit_map' => 'Unit Map',
            'status' => 'Status',
            'last_update' => 'Last Update',
            'timestamp' => 'Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'is_sold' => 'Is Sold',
            'comments' => 'Comments',
        ];
    }
        public function beforeValidate() {
        if (parent::beforeValidate()) {
            $this->created_by = Yii::$app->user->ID;
            $this->last_update = Date('Y-m-d');
            //$this->date = Yii::$app->request->post('date');
         
            }
            //$this->accountant_id = Yii::$app->user->ID;
            return true;
        }
}
