<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_apartment_ledger".
 *
 * @property integer $id
 * @property integer $accountant_id
 * @property integer $member_id
 * @property integer $appartment_id
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
 * @property MemberAppartments $appartment
 * @property Admins $accountant
 */
class MemberApartmentLedger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member_apartment_ledger';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['member_id','appartment_id'], 'required'],
            [['accountant_id', 'member_id', 'appartment_id'], 'integer'],
            [['last_modified', 'timestamp'], 'safe'],
            [['date_as_on'], 'string', 'max' => 45],
            [['particulars'], 'string', 'max' => 500],
            [['society_receipt', 'payable_outstanding', 'payment_received', 'balance_outstanding'], 'string', 'max' => 200],
            [['remarks'], 'string', 'max' => 300],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Members::className(), 'targetAttribute' => ['member_id' => 'id']],
            [['appartment_id'], 'exist', 'skipOnError' => true, 'targetClass' => MemberAppartments::className(), 'targetAttribute' => ['appartment_id' => 'id']],
            //[['accountant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admins::className(), 'targetAttribute' => ['accountant_id' => 'id']],
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
            'appartment_id' => Yii::t('app', 'Appartment ID'),
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
    public function getAppartment()
    {
        return $this->hasOne(MemberAppartments::className(), ['id' => 'appartment_id']);
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
            $this->accountant_id = NULL;
            return true;
        }
    }
}
