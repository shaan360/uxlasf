<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_shop_ledger".
 *
 * @property integer $id
 * @property integer $accountant_id
 * @property integer $member_id
 * @property integer $shop_id
 * @property string $date_as_on
 * @property string $particulars
 * @property string $society_receipt
 * @property string $payable_outstanding
 * @property string $payment_received
 * @property string $balance_outstanding
 * @property string $remarks
 * @property string $last_modified
 * @property string $timestamp
 *
 * @property Members $member
 * @property MemberShops $shop
 * @property Admins $accountant
 */
class MemberShopLedger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member_shop_ledger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id', 'shop_id'], 'required'],
            [['accountant_id', 'member_id', 'shop_id'], 'integer'],
            [['last_modified', 'timestamp'], 'safe'],
            [['date_as_on'], 'string', 'max' => 45],
            [['particulars'], 'string', 'max' => 500],
            [['society_receipt', 'payable_outstanding', 'payment_received', 'balance_outstanding'], 'string', 'max' => 200],
            [['remarks'], 'string', 'max' => 300],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Members::className(), 'targetAttribute' => ['member_id' => 'id']],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => MemberShops::className(), 'targetAttribute' => ['shop_id' => 'id']],
           // [['accountant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admins::className(), 'targetAttribute' => ['accountant_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'accountant_id' => Yii::t('app', 'Accountant ID'),
            'member_id' => Yii::t('app', 'Member ID'),
            'shop_id' => Yii::t('app', 'Shop ID'),
            'date_as_on' => Yii::t('app', 'Date As On'),
            'particulars' => Yii::t('app', 'Particulars'),
            'society_receipt' => Yii::t('app', 'Society Receipt'),
            'payable_outstanding' => Yii::t('app', 'Payable Outstanding'),
            'payment_received' => Yii::t('app', 'Payment Received'),
            'balance_outstanding' => Yii::t('app', 'Balance Outstanding'),
            'remarks' => Yii::t('app', 'Remarks'),
            'last_modified' => Yii::t('app', 'Last Modified'),
            'timestamp' => Yii::t('app', 'Timestamp'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember()
    {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(MemberShops::className(), ['id' => 'shop_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountant()
    {
        return $this->hasOne(Admins::className(), ['id' => 'accountant_id']);
    }
    
      public function beforeValidate() {
        if (parent::beforeValidate()) {
            $this->created_by = Yii::$app->user->ID;
            $this->last_modified = Date('Y-m-d');
            $this->date_as_on = Yii::$app->request->post('date_as_on');
            $this->accountant_id = null;
            return true;
        }
    }
}
