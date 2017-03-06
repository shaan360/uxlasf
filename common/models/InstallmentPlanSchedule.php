<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "installment_plan_schedule".
 *
 * @property integer $id
 * @property string $type
 * @property integer $number_of_beds
 * @property double $size
 * @property double $price
 * @property double $downpayment
 * @property double $36_months_installment
 * @property double $quaterly_installment
 * @property integer $installment_plan_id
 *
 * @property InstallmentPlan $installmentPlan
 */
class InstallmentPlanSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'installment_plan_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number_of_beds', 'installment_plan_id'], 'integer'],
            [['size', 'price', 'downpayment', 'months_36_installment', 'quaterly_installment'], 'number'],
            [['installment_plan_id'], 'required'],
            [['type'], 'string', 'max' => 256],
            [['installment_plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => InstallmentPlan::className(), 'targetAttribute' => ['installment_plan_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type' => Yii::t('app', 'Type'),
            'number_of_beds' => Yii::t('app', 'Number Of Beds'),
            'size' => Yii::t('app', 'Size'),
            'price' => Yii::t('app', 'Price'),
            'downpayment' => Yii::t('app', 'Downpayment'),
            'months_36_installment' => Yii::t('app', '36 Months Installment'),
            'quaterly_installment' => Yii::t('app', 'Quaterly Installment'),
            'installment_plan_id' => Yii::t('app', 'Installment Plan ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInstallmentPlan()
    {
        return $this->hasOne(InstallmentPlan::className(), ['id' => 'installment_plan_id']);
    }
}
