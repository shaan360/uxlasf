<?php

namespace common\models;

use Yii;
use common\models\query\DailySales;
use yii\base\Model;
use yii\data\ActiveDataProvider;
/**
 * This is the model class for table "member_plots".
 *
 * @property integer $id
 * @property integer $accountant_id
 * @property integer $member_id
 * @property string $plot_no
 * @property string $category
 * @property integer $payment_mode
 * @property string $plot_size
 * @property string $plot_prize
 * @property string $plot_document
 * @property integer $status
 * @property string $last_update
 * @property string $timestamp
 *
 * @property MemberPlotLedger[] $memberPlotLedgers
 * @property Members $member
 * @property Admins $accountant
 */
class MemberPlots extends \yii\db\ActiveRecord {

    public $pic;
    public $unit_price;
    public $is_price;
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'member_plots';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['member_id','unit_id', 'plot_document','installment_plan_id'], 'required'],
            [['member_id', 'payment_mode','number_of_payments' ,'status', 'created_by'], 'integer'],
            [['last_update', 'timestamp','unit_id'], 'safe'],
            [['plot_prize'], 'string', 'max' => 45],
            [['plot_document', 'photo_path'], 'string', 'max' => 200],
            //[['plot_no'], 'unique'],
            [['member_id'], 'exist', 'skipOnError' => true, 'targetClass' => Members::className(), 'targetAttribute' => ['member_id' => 'id']],
            //[['accountant_id'], 'exist', 'skipOnError' => true, 'targetClass' => Admins::className(), 'targetAttribute' => ['accountant_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            //'accountant_id' => Yii::t('app', 'Accountant ID'),
            'member_id' => Yii::t('app', 'Member ID'),
            'unit_id' => Yii::t('app', 'Unit No'),
          //  'category' => Yii::t('app', 'Category'),
            'payment_mode' => Yii::t('app', 'Payment Mode'),
            'number_of_payments' => Yii::t('app', 'Number of Payments'),
            'plot_prize' => Yii::t('app', 'Unit Price/Sqft'),
            'plot_document' => Yii::t('app', 'Plot Document'),
            'status' => Yii::t('app', 'Status'),
            'last_update' => Yii::t('app', 'Last Update'),
            'timestamp' => Yii::t('app', 'Timestamp'),
            'pic' => Yii::t('app', 'unit Document'),
            
            'date' => Yii::t('app', 'Date'),
        ];
    }


    public function getPayments() {
        $query = MemberPlotLedger::find()->where('unit_id=' . $this->unit_id);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function paymentTotal(){
        $query = MemberPlotLedger::find()->select('sum(payment_received) as payment_received')->where('unit_id=' . $this->unit_id)->one();
      
        return $query['payment_received'];
    }
   public function paymentOutstanding(){
       $query = MemberPlotLedger::find()->select('sum(payment_received) as payment_received')->where('unit_id=' . $this->unit_id);
      // $query_total = $this->planType;
       return $query;
       //return $query_total->price - $query['payment_received'];
   }
    public function ispaymentdue(){
       $query = MemberPlotLedger::find()->select('id')->where('unit_id=' . $this->unit_id.'AND month(date_as_on) = month(curdate())');
      
       if($query['id']> 0){
       return 'Yes';
       }
       else {
             return 'No';
     
       }
       //return $query_total->price - $query['paymeneceived']t_r;
   }
public function totalPrice(){

    return  $this->plot_prize*$this->unit->size;
}
public function balanceAmount(){
        $unit_size = $this->unit;
        $unit_type = $unit_size->unit_type;

        $gettype = Lookup::item('unit_type', $unit_type);
        $total_p = $this->plot_prize*$this->unit->size;
        if ($gettype == "A(Corner)" || $gettype == "B(Corner)") {
            $corner_charges = ($total_p / 100) * 10;
            $total_p = $total_p + $corner_charges;
        }
        return  $total_p - $this->paymentTotal();
}
public function downpayment(){
      $downpayment=($this->plot_prize*$this->unit->size)*($this->plan->installment_downpayment_percentage/100);
    return $downpayment;
}
public function possessionCharges(){
      $possession=($this->plot_prize*$this->unit->size)*($this->plan->possession_charges/100);
    return $possession;
}
public function cornerCharges(){
      $corner=($this->plot_prize*$this->unit->size)*($this->plan->corner_charge/100);
    return $corner;
}
public function totalinstallmentAmount(){
   
    return $this->totalPrice()-($this->downpayment()+$this->possessionCharges());
}
public function totalCharges(){

    return $this->totalPrice()+$this->cornerCharges();
}
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMember() {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }
     public function getUnit() {
        return $this->hasOne(Units::className(), ['id' => 'unit_id']);
    }
    public function getPlanType() {
        return $this->hasOne(InstallmentPlanSchedule::className(), ['id' => 'plan_type']);
    }
    public function getPlan() {
        return $this->hasOne(InstallmentPlan::className(), ['id' => 'installment_plan_id']);
    }

 
    public function getUnitPrice() {
        return $this->hasOne(MemberPlots::className(), ['id' => 'id']);
        //$query= $this->hasOne(MemberPlots::className(), ['id' => 'id']);
          //       var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
    }
 
    public function getPlanPaymentType(){
          return $this->hasOne(Lookup::className(), ['id' => 'payment_mode']);
       
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
         
            }
            //$this->accountant_id = Yii::$app->user->ID;
            return true;
        }
        
//       public static function find()
//    {
//        return new DailySales(get_called_class());
//    }
    }



