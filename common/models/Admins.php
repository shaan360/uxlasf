<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admins".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $password_strategy
 * @property integer $requires_new_password
 * @property string $email
 * @property integer $login_attempts
 * @property integer $login_time
 * @property string $login_ip
 * @property string $validation_key
 * @property integer $create_id
 * @property integer $create_time
 * @property integer $update_id
 * @property integer $update_time
 *
 * @property MemberApartmentLedger[] $memberApartmentLedgers
 * @property MemberAppartments[] $memberAppartments
 * @property MemberPlotLedger[] $memberPlotLedgers
 * @property MemberPlots[] $memberPlots
 * @property MemberShopLedger[] $memberShopLedgers
 * @property MemberShops[] $memberShops
 */
class Admins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admins';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'salt', 'password_strategy', 'requires_new_password', 'email', 'login_attempts', 'login_time', 'login_ip', 'validation_key', 'create_id', 'create_time', 'update_id', 'update_time'], 'required'],
            [['requires_new_password', 'login_attempts', 'login_time', 'create_id', 'create_time', 'update_id', 'update_time'], 'integer'],
            [['username'], 'string', 'max' => 45],
            [['password', 'salt', 'password_strategy', 'email', 'validation_key'], 'string', 'max' => 255],
            [['login_ip'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'salt' => Yii::t('app', 'Salt'),
            'password_strategy' => Yii::t('app', 'Password Strategy'),
            'requires_new_password' => Yii::t('app', 'Requires New Password'),
            'email' => Yii::t('app', 'Email'),
            'login_attempts' => Yii::t('app', 'Login Attempts'),
            'login_time' => Yii::t('app', 'Login Time'),
            'login_ip' => Yii::t('app', 'Login Ip'),
            'validation_key' => Yii::t('app', 'Validation Key'),
            'create_id' => Yii::t('app', 'Create ID'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_id' => Yii::t('app', 'Update ID'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberApartmentLedgers()
    {
        return $this->hasMany(MemberApartmentLedger::className(), ['accountant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberAppartments()
    {
        return $this->hasMany(MemberAppartments::className(), ['accountant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberPlotLedgers()
    {
        return $this->hasMany(MemberPlotLedger::className(), ['accountant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberPlots()
    {
        return $this->hasMany(MemberPlots::className(), ['accountant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberShopLedgers()
    {
        return $this->hasMany(MemberShopLedger::className(), ['accountant_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMemberShops()
    {
        return $this->hasMany(MemberShops::className(), ['accountant_id' => 'id']);
    }
}
