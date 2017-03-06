<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property integer $id
 * @property string $membership_number
 * @property string $application_document
 * @property string $form_number
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $photo
 * @property string $father_husband_name
 * @property string $postal_address
 * @property string $residential_address
 * @property string $phone_office
 * @property string $phone_residential
 * @property string $mobile
 * @property string $email
 * @property string $occupation
 * @property string $nationality
 * @property string $dob
 * @property string $cnic
 * @property string $member_cnic
 * @property string $name_of_nominee
 * @property string $relation
 * @property string $address_of_nominee
 * @property string $nominee_cnic
 * @property string $nominee_cnic_scan
 * @property string $application_date
 * @property string $password
 * @property string $remarks
 * @property string $active_key
 * @property string $is_blocked
 * @property integer $status
 * @property string $last_login
 * @property string $last_modified
 * @property string $timestamp
 *
 * @property MemberApartmentLedger[] $memberApartmentLedgers
 * @property MemberAppartments[] $memberAppartments
 * @property MemberPlotLedger[] $memberPlotLedgers
 * @property MemberPlots[] $memberPlots
 * @property MemberShopLedger[] $memberShopLedgers
 * @property MemberShops[] $memberShops
 */
class Members extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'members';
    }

    public $pic, $pic2, $pic3, $pic4;
    public $username;
    public function behaviors() {
        return [
            'pic' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic',
                'pathAttribute' => 'photo',
                'baseUrlAttribute' => 'photo_path'
            ],
            'pic2' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic2',
                'pathAttribute' => 'application_document',
                'baseUrlAttribute' => 'photo_path',
               // 'multiple' => true,
                //'uploadRelation' => 'articleAttachments',
                //'pathAttribute' => 'path',
                'orderAttribute' => 'order',
                'typeAttribute' => 'type',
                'sizeAttribute' => 'size',
                'nameAttribute' => 'name'
            ],
            'pic3' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic3',
                'pathAttribute' => 'member_cnic',
                'baseUrlAttribute' => 'photo_path'
            ],
            'pic4' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic4',
                'pathAttribute' => 'nominee_cnic_scan',
                'baseUrlAttribute' => 'photo_path'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['membership_number', 'application_document','dob','form_number','member_type', 'photo', 'member_cnic', 'name_of_nominee', 'relation', 'address_of_nominee', 'nominee_cnic', 'nominee_cnic_scan', 'remarks', 'status','cnic'], 'required'],
            [['application_date', 'last_login', 'last_modified', 'timestamp', 'pic', 'pic2', 'pic3', 'pic4'], 'safe'],
            [['is_blocked','username', 'photo_path'], 'string'],
            [['status', 'created_by'], 'integer'],
            [['membership_number', 'form_number', 'first_name', 'last_name'], 'string', 'max' => 45],
            [['application_document', 'full_name', 'photo', 'occupation', 'member_cnic', 'nominee_cnic_scan', 'active_key'], 'string', 'max' => 200],
            [['father_husband_name', 'password'], 'string', 'max' => 255],
            [['postal_address', 'residential_address'], 'string', 'max' => 500],
            ['application_date','date','format' => 'yyyy-mm-dd'],
        
            [['phone_office', 'phone_residential', 'mobile', 'email', 'nationality', 'cnic', 'relation'], 'string', 'max' => 100],
            [['name_of_nominee'], 'string', 'max' => 250],
            [['address_of_nominee', 'remarks'], 'string', 'max' => 300],
            [['nominee_cnic'], 'string', 'max' => 50],
            [['form_number', 'cnic', 'membership_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'membership_number' => Yii::t('app', 'Membership Number'),
            'member_type' => Yii::t('app', 'Membership Type'),

            'application_document' => Yii::t('app', 'Application Document'),
            'form_number' => Yii::t('app', 'Form Number'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'full_name' => Yii::t('app', 'Full Name'),
            'photo' => Yii::t('app', 'Photo'),
            'father_husband_name' => Yii::t('app', 'Father/Husband Name'),
            'postal_address' => Yii::t('app', 'Current Address'),
            'residential_address' => Yii::t('app', 'Permanent Address'),
            'phone_office' => Yii::t('app', 'Phone Office'),
            'phone_residential' => Yii::t('app', 'Phone Residential'),
            'mobile' => Yii::t('app', 'Mobile'),
            'email' => Yii::t('app', 'Email'),
            'occupation' => Yii::t('app', 'Occupation'),
            'nationality' => Yii::t('app', 'Nationality'),
            'dob' => Yii::t('app', 'DOB'),
            'cnic' => Yii::t('app', 'CNIC'),
            'member_cnic' => Yii::t('app', 'Member Cnic'),
            'name_of_nominee' => Yii::t('app', 'Next Of Kin'),
            'relation' => Yii::t('app', 'Relation'),
            'address_of_nominee' => Yii::t('app', 'Next of Kin Address'),
            'nominee_cnic' => Yii::t('app', 'Next of Kin CNIC'),
            'nominee_cnic_scan' => Yii::t('app', 'Next of Kin CNIC Scan'),
            'application_date' => Yii::t('app', 'Application Date'),
            'password' => Yii::t('app', 'Password'),
            'remarks' => Yii::t('app', 'Remarks'),
            'active_key' => Yii::t('app', 'Active Key'),
            'is_blocked' => Yii::t('app', 'Is Blocked'),
            'status' => Yii::t('app', 'Status'),
            'last_login' => Yii::t('app', 'Last Login'),
            'last_modified' => Yii::t('app', 'Last Modified'),
            'timestamp' => Yii::t('app', 'Timestamp'),
            'pic'=>Yii::t('app', 'Member Photo'),
            'pic2'=>Yii::t('app','Application Document'),
            'pic3'=>Yii::t('app', 'Member Scaned NIC'),
            'pic4'=>Yii::t('app', 'Next of kin CNIC'),
            'username'=>Yii::t('app', 'Username'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getMemberApartmentLedgers() {
//        return $this->hasMany(MemberApartmentLedger::className(), ['member_id' => 'id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getApartments() {
//        $query = MemberAppartments::find()->where('member_id=' . $this->id);
//        $dataProvider = new \yii\data\ActiveDataProvider([
//            'query' => $query,
//        ]);
//        return $dataProvider;
//    }

//    public function getMemberAppartments() {
//        return $this->hasMany(MemberAppartments::className(), ['member_id' => 'id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberPlotLedgers() {
        return $this->hasMany(MemberPlotLedger::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlots() {
        $query = MemberPlots::find()->where('member_id=' . $this->id);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
        ]);
        return $dataProvider;
    }

    public function getMemberPlots() {
        return $this->hasMany(MemberPlots::className(), ['member_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getMemberShopLedgers() {
//        return $this->hasMany(MemberShopLedger::className(), ['member_id' => 'id']);
//    }

    public function beforeValidate() {
        if (parent::beforeValidate()) {
            $this->created_by = Yii::$app->user->ID;
            $this->last_modified = Date('Y-m-d');
            return true;
        }
    }
    function beforeSave($insert) {
    if($insert){
        //var_dump($_POST);exit;
        $user = new User();
        $user->username = $this->username;
        $user->auth_key=Yii::$app->security->generateRandomString();
        //$user->setPassword($this->password);
        $user->email = $this->email;
        $user->status = 2;
        if($user->save()){
        $this->id= $user->primaryKey;
       // var_dump($this->id);exit;
        $auth = Yii::$app->authManager;
        $auth->assign($auth->getRole(User::ROLE_USER), $user->primaryKey);
        $profile = new UserProfile();
        $profile->user_id = $user->primaryKey;
        $profile->firstname = $this->first_name;
        $profile->lastname = $this->last_name;
        $profile->save();
        return true;
        }else{
            $this->addError('id','Could Not Create User. Form does not save. Check <br />'.  json_encode($user->getErrors()));
        }
        
    }else{
        return true;
    }
        parent::beforeSave($insert);
    }
    
function afterSave($insert, $changedAttributes) {
    parent::afterSave($insert, $changedAttributes);
}
    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getShops() {
//        $query = MemberShops::find()->where('member_id=' . $this->id);
//        $dataProvider = new \yii\data\ActiveDataProvider([
//            'query' => $query,
//        ]);
//        return $dataProvider;
//    }

//    public function getMemberShops() {
//        return $this->hasMany(MemberShops::className(), ['member_id' => 'id']);
//    }

}
