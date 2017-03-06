<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "member_plot_ledger".
 *
 * @property integer $id
 * @property integer $accountant_id
 * @property integer $member_id
 * @property integer $plot_id
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
 * @property MemberPlots $plot
 * @property Admins $accountant
 */
class MemberPlotLedger extends \yii\db\ActiveRecord {
    public $name;
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'member_plot_ledger';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['member_id', 'unit_id','date_as_on'], 'required'],
            [['accountant_id' ,'member_id', 'unit_id'], 'integer'],
            [['last_modified','payment_mode', 'timestamp'], 'safe'],
            [['particulars'], 'string', 'max' => 500],
            ['date_as_on','date','format' => 'yyyy-mm-dd'],
            [['society_receipt', 'payable_outstanding', 'payment_received', 'balance_outstanding'], 'string', 'max' => 200],
            [['remarks'], 'string', 'max' => 300],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Members::className(), 'targetAttribute' => ['member_id' => 'id']],
           // [['unit_id','accountant_id'], 'exist', 'skipOnError' => true, 'targetClass' => MemberPlots::className(), 'targetAttribute' => ['unit' => 'id']],
            //[['accountant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admins::className(), 'targetAttribute' => ['accountant_id' => 'id']],
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
            'unit_id' => Yii::t('app', 'Unit No'),
            'date_as_on' => Yii::t('app', 'Date As On'),
            'particulars' => Yii::t('app', 'Particulars'),
            'society_receipt' => Yii::t('app', 'Receipt#'),
            'payable_outstanding' => Yii::t('app', 'Payable Outstanding'),
            'payment_received' => Yii::t('app', 'Payment Received'),
            'balance_outstanding' => Yii::t('app', 'Balance Outstanding'),
            'remarks' => Yii::t('app', 'Remarks'),
            'payment_mode' => Yii::t('app', 'Payment Mode'),
            'last_modified' => Yii::t('app', 'Last Modified'),
            'timestamp' => Yii::t('app', 'Timestamp'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember() {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlot() {
        return $this->hasOne(MemberPlots::className(), ['unit_id' => 'unit_id']);
        
    }
     public function getUnit() {
        return $this->hasOne(Units::className(), ['id' => 'unit_id']);
    } 

      public function getPlotprice() {
        return $this->hasOne(MemberPlots::className(), ['plot_id' => 'id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccountant() {
        return $this->hasOne(Admins::className(), ['id' => 'accountant_id']);
    }
   public function paymentTotal(){
        $query = MemberPlotLedger::find()->select('sum(payment_received) as payment_received')->where(['member_id' =>$this->member_id ])->one();
      //  var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        return $query['payment_received'];
    }
    
    public function beforeValidate() {
        if (parent::beforeValidate()) {
            $this->created_by = Yii::$app->user->ID;
            $this->last_modified = Date('Y-m-d');
            $this->date_as_on = Yii::$app->request->post('date_as_on');
           // $this->unit_id = Yii::$app->request->post('MemberPlotLedger[plot_id]');
            $this->accountant_id = null;
            return true;
        }
    }

}
