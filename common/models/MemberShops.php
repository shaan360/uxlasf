<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_shops".
 *
 * @property integer $id
 * @property integer $accountant_id
 * @property integer $member_id
 * @property string $shop_no
 * @property string $category
 * @property integer $payment_mode
 * @property string $shop_size
 * @property string $shop_prize
 * @property string $shop_document
 * @property integer $status
 * @property string $last_update
 * @property string $timestamp
 *
 * @property MemberShopLedger[] $memberShopLedgers
 * @property Members $member
 * @property Admins $accountant
 */
class MemberShops extends \yii\db\ActiveRecord {

    public $pic;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'member_shops';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['accountant_id', 'member_id', 'shop_document','installment_plan_id','date','plan_type','plan_payment_type'], 'required'],
            [['accountant_id', 'member_id','unit_type' ,'payment_mode', 'status','created_by'], 'integer'],
            [['last_update', 'timestamp'], 'safe'],
            [['shop_no', 'category', 'shop_size', 'shop_prize'], 'string', 'max' => 45],
            [['shop_document'], 'string', 'max' => 200],
            [['shop_no'], 'unique'],
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
            'accountant_id' => Yii::t('app', 'Accountant ID'),
            'member_id' => Yii::t('app', 'Member ID'),
            'shop_no' => Yii::t('app', 'Shop No'),
            'category' => Yii::t('app', 'Category'),
            'payment_mode' => Yii::t('app', 'Payment Mode'),
            'shop_size' => Yii::t('app', 'Shop Size'),
            'shop_prize' => Yii::t('app', 'Shop Prize'),
            'shop_document' => Yii::t('app', 'Shop Document'),
            'status' => Yii::t('app', 'Status'),
            'last_update' => Yii::t('app', 'Last Update'),
            'timestamp' => Yii::t('app', 'Timestamp'),
            'pic' => Yii::t('app', 'Shop Document'),
            'unit_type' => Yii::t('app', 'Unit Type')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberShopLedgers() {
        return $this->hasMany(MemberShopLedger::className(), ['shop_id' => 'id']);
    }

    public function getPayments() {
        $query = MemberShopLedger::find()->where('shop_id=' . $this->id);
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
        $query = MemberShopLedger::find()->select('sum(payable_outstanding) as payable_outstanding')->where('shop_id=' . $this->id)->one();
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
