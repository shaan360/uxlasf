<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "installment_plan".
 *
 * @property integer $id
 * @property string $installment_plan_name
 * @property double $installment_plan_price
 * @property double $installment_downpayment_percentage
 * @property string $note
 * @property integer $created_by
 * @property string $created_on
 * @property integer $last_updated_by
 *
 * @property InstallmentPlanSchedule[] $installmentPlanSchedules
 */
class InstallmentPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'installment_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
         [['installment_plan_price','possession_charges','corner_charge', 'installment_downpayment_percentage','installment_plan_name'], 'required'],
            [['installment_plan_price', 'possession_charges','corner_charge', 'installment_downpayment_percentage'], 'number','numberPattern' => '/^\s*[-+]?[0-9]*[.,]?[0-9]+([eE][-+]?[0-9]+)?\s*$/'],
            [['note'], 'string'],
            [['corner_charge'],'number'],
            [['created_by', 'last_updated_by'], 'integer'],
            [['created_on'], 'safe'],
            [['installment_plan_name'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            
            'corner_charge' => Yii::t('app', 'Corner Charge %'),
            'possession_charges' => Yii::t('app', 'possession Charge %'),

            'installment_plan_name' => Yii::t('app', 'Installment Plan Name'),
            'installment_plan_price' => Yii::t('app', 'Price/Sq Feet'),
            'installment_downpayment_percentage' => Yii::t('app', 'Down Payment %'),
            'note' => Yii::t('app', 'Note'),
            'created_by' => Yii::t('app', 'Created By'),
            'created_on' => Yii::t('app', 'Created On'),
            'last_updated_by' => Yii::t('app', 'Last Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstallmentPlanSchedules()
    {
        return $this->hasMany(InstallmentPlanSchedule::className(), ['installment_plan_id' => 'id']);
    }
}
