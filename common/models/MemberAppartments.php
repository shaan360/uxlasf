<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_appartments".
 *
 * @property integer $id
 * @property integer $member_id
 * @property integer $accountant_id
 * @property string $unit_no
 * @property string $block
 * @property string $type
 * @property string $floor
 * @property string $prize
 * @property string $apartment_document
 * @property string $last_update
 * @property string $timestamp
 *
 * @property MemberApartmentLedger[] $memberApartmentLedgers
 * @property Members $member
 * @property Admins $accountant
 */
class MemberAppartments extends \yii\db\ActiveRecord {

    public $pic;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'member_appartments';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['member_id', 'accountant_id', 'apartment_document','installment_plan_id','date','plan_type','plan_payment_type'], 'required'],
            [['member_id', 'accountant_id','created_by'], 'integer'],
            [['last_update', 'timestamp'], 'safe'],
            [['unit_no', 'block', 'unit_type', 'floor', 'prize'], 'string', 'max' => 45],
            [['apartment_document','photo_path'], 'string', 'max' => 200],
            [['unit_no'], 'unique'],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Members::className(), 'targetAttribute' => ['member_id' => 'id']],
            [['accountant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admins::className(), 'targetAttribute' => ['accountant_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'member_id' => Yii::t('app', 'Member ID'),
            'accountant_id' => Yii::t('app', 'Accountant ID'),
            'unit_no' => Yii::t('app', 'Unit No'),
            'block' => Yii::t('app', 'Block'),
            'unit_type' => Yii::t('app', 'Unit Type'),
            'floor' => Yii::t('app', 'Floor'),
            'prize' => Yii::t('app', 'Prize'),
            'apartment_document' => Yii::t('app', 'Apartment Document'),
            'last_update' => Yii::t('app', 'Last Update'),
            'timestamp' => Yii::t('app', 'Timestamp'),
            'pic' => Yii::t('app', 'Appartment Document'),
            //'unit_type' => Yii::t('app', 'Unit Type')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberApartmentLedgers() {
        return $this->hasMany(MemberApartmentLedger::className(), ['appartment_id' => 'id']);
    }

    public function getPayments() {
        $query = MemberApartmentLedger::find()->where('appartment_id=' . $this->id);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember() {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }

    public function paymentTotal(){
        $query = MemberApartmentLedger::find()->select('sum(payable_outstanding) as payable_outstanding')->where('appartment_id=' . $this->id)->one();
        return $query['payable_outstanding'];
    }
     public function getPlanType() {
        return $this->hasOne(InstallmentPlanSchedule::className(), ['id' => 'plan_type']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountant() {
        return $this->hasOne(Admins::className(), ['id' => 'accountant_id']);
    }

    public function beforeValidate() {
        if (parent::beforeValidate()) {
            $this->created_by = Yii::$app->user->ID;
            $this->last_update = Date('Y-m-d');
            $this->date = Yii::$app->request->post('date');
            $this->accountant_id = Yii::$app->user->ID;
            return true;
        }
    }

}
