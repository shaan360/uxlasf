<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;
use kartik\tree\models\TreeTrait;

/**
 * This is the model class for table "lookups".
 *
 * @property integer $id
 * @property integer $type
 * @property string $name
 * @property string $value
 * @property string $code
 * @property integer $status
 * @property string $updated_by
 * @property integer $updated_at
 * @property string $created_by
 * @property integer $created_at
 * @property integer $is_deleted
 *
 * @property Businesses $business
 */
class Lookup extends \yii\db\ActiveRecord
{

 private static $_items=array();

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'is_deleted', 'value'], 'integer'],
            [['is_deleted'], 'default', 'value'=> 0],
            [['status'], 'default', 'value'=> 1],
            [['name','type','code'], 'string', 'max' => 45],
            [['updated_by', 'created_by', 'updated_at', 'created_at'], 'safe'],
            // [['type'], 'exist', 'skipOnError' => true, 'targetClass' => Business::className(), 'targetAttribute' => ['type' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'type' => Yii::t('frontend', 'Type'),
            'name' => Yii::t('frontend', 'Name'),
            'value' => Yii::t('frontend', 'Value'),
            'code' => Yii::t('frontend', 'Code'),
            'status' => Yii::t('frontend', 'Status'),
            'updated_by' => Yii::t('frontend', 'Updated By'),
            'updated_at' => Yii::t('frontend', 'Updated At'),
            'created_by' => Yii::t('frontend', 'Created By'),
            'created_at' => Yii::t('frontend', 'Created At'),
            'is_deleted' => Yii::t('frontend', 'Is Deleted'),
        ];
    }



         public static function items($type)
    {
        if(!isset(self::$_items[$type]))
            self::loadItems($type);
        return self::$_items[$type];
    }

    /**
     * Returns the item name for the specified type and code.
     * @param string the item type (e.g. 'PostStatus').
     * @param integer the item code (corresponding to the 'code' column value)
     * @return string the item name for the specified the code. False is returned if the item type or code does not exist.
     */
    public static function item($type,$code)
    {
        if(!isset(self::$_items[$type]))
            self::loadItems($type);
        return isset(self::$_items[$type][$code]) ? self::$_items[$type][$code] : false;
    }

    /**
     * Loads the lookup items for the specified type from the database.
     * @param string the item type
     */
    private static function loadItems($type)
    {
        self::$_items[$type]=array();
        
                $models = self::findAll(['type' => $type]);
        foreach($models as $model)
            self::$_items[$type][$model->id]=$model->name;
    }
     public static function itemShort($type,$code)
    {
        if(!isset(self::$_items[$type]))
            self::loadItemsShort($type);
        return isset(self::$_items[$type][$code]) ? self::$_items[$type][$code] : false;
    }

    /**
     * Loads the lookup items for the specified type from the database.
     * @param string the item type
     */
    private static function loadItemsShort($type)
    {
        self::$_items[$type]=array();
        
                $models = self::findAll(['type' => $type]);
        foreach($models as $model)
            self::$_items[$type][$model->id]=$model->code;
    }
 public static $plot_categories = [1 => "CATEGORY-A (30x60)", 2 => "CATEGORY-B (40x80)"];
    public static $shop_categories = [1=>'Shop'];
    public static $payment_modes = [0=>'Full Payment',1=>'Monthly Instalment'];
    public static $installmentPaymentModes = [0=>'Cash',1=>'Check',2=>'Pay order'];
    public static $payment_status = [0=>'Draft',1=>'Complete',3=>'Trash'];
    public static $plan_payment_type = [0=>'36 Month Installment',1=>'Quarterly Installment'];
    public static $unit_type = [0=>'Residential',1=>'Commercial'];

    public static $unit_floor=[0=>"Ground Floor",1=>"First Floor",2=>"Second Floor"];
    
    public static function getUnitFloor(){
        
        return Lookup::$unit_floor;
    }

    public static function getPlotCategories() {
        return Lookup::$plot_categories;
    }
     public static function getPlotCategory($id){
        return Lookup::$plot_categories[$id];
    }
      public static function getUnitType() {
        return Lookup::$unit_type;
    }
      public static function getPlotUnit($id) {
        return Lookup::$unit_type[$id];
    }
    public static function getShopCategories(){
        return Lookup::$shop_categories;
    }
    public static function getPlanPaymentModes(){
        return Lookup::$plan_payment_type;
    }
    public static function getPaymentModes(){
        return Lookup::$payment_modes;
    }
    public static function getInstallmentPaymentModes(){
        return Lookup::$installmentPaymentModes;
    }
    public static function getPaymentMode($id){
        return Lookup::$payment_modes[$id];
    }
    public static function getDocumentStatus(){
        return Lookup::$payment_status;
    }
}
