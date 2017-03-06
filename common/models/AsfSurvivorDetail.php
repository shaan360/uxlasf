<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_survivor_detail".
 *
 * @property integer $id
 * @property string $survivor_id
 * @property string $victim_perpetrator_link
 * @property string $victim_perpetrator_type
 * @property string $birth_place
 * @property string $patient_profession
 * @property string $religion
 * @property integer $father_age
 * @property string $father_profession
 * @property string $father_address
 * @property string $father_city
 * @property string $province
 * @property string $telephone_number
 * @property string $mother_name
 * @property integer $mother_age
 * @property string $mother_victim
 * @property string $multiple_mother_number
 * @property integer $brother_number
 * @property integer $sister_number
 * @property integer $position_brother
 * @property integer $house_room
 * @property string $rent_owned
 * @property string $house_structure
 * @property string $family_earning
 * @property string $marital_status
 * @property string $spouse_name
 * @property string $spouse_profession
 * @property string $spouse_address
 * @property string $spouse_city
 * @property string $spouse_number
 * @property string $patient_number_husband_multiple_marriage
 * @property string $family_joint_earning
 * @property string $bread_line
 * @property integer $children_number
 * @property string $boys_number
 * @property string $boys_age
 * @property string $girls_number
 * @property string $girls_age
 * @property integer $spouse_children_number
 * @property integer $house_room_number
 * @property integer $family_member_in_house
 * @property string $comments_remarks
 */
class AsfSurvivorDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_survivor_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['survivor_id', 'victim_perpetrator_link', 'victim_perpetrator_type', 'birth_place', 'patient_profession', 'religion', 'father_age', 'father_profession', 'father_address', 'father_city', 'province', 'telephone_number', 'mother_name', 'mother_age', 'mother_victim', 'multiple_mother_number', 'brother_number', 'sister_number', 'position_brother', 'house_room', 'rent_owned', 'house_structure', 'family_earning', 'marital_status', 'spouse_name', 'spouse_profession', 'spouse_address', 'spouse_city', 'spouse_number', 'patient_number_husband_multiple_marriage', 'family_joint_earning', 'bread_line', 'children_number', 'boys_number', 'boys_age', 'girls_number', 'girls_age', 'spouse_children_number', 'house_room_number', 'family_member_in_house', 'comments_remarks'], 'required'],
            [['victim_perpetrator_link', 'rent_owned', 'house_structure', 'marital_status', 'bread_line', 'comments_remarks'], 'string'],
            [['father_age', 'mother_age', 'brother_number', 'sister_number', 'position_brother', 'house_room', 'children_number', 'spouse_children_number', 'house_room_number', 'family_member_in_house'], 'integer'],
            [['survivor_id', 'victim_perpetrator_type', 'birth_place', 'patient_profession', 'religion', 'father_profession', 'father_address', 'father_city', 'province', 'telephone_number', 'mother_name', 'mother_victim', 'multiple_mother_number', 'family_earning', 'spouse_name', 'spouse_profession', 'spouse_address', 'spouse_city', 'spouse_number', 'patient_number_husband_multiple_marriage', 'family_joint_earning', 'boys_number', 'boys_age', 'girls_number', 'girls_age'], 'string', 'max' => 255],
            [['survivor_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'survivor_id' => 'Survivor ID',
            'victim_perpetrator_link' => 'Victim Perpetrator Link',
            'victim_perpetrator_type' => 'Victim Perpetrator Type',
            'birth_place' => 'Birth Place',
            'patient_profession' => 'Patient Profession',
            'religion' => 'Religion',
            'father_age' => 'Father Age',
            'father_profession' => 'Father Profession',
            'father_address' => 'Father Address',
            'father_city' => 'Father City',
            'province' => 'Province',
            'telephone_number' => 'Telephone Number',
            'mother_name' => 'Mother Name',
            'mother_age' => 'Mother Age',
            'mother_victim' => 'Mother Victim',
            'multiple_mother_number' => 'Multiple Mother Number',
            'brother_number' => 'Brother Number',
            'sister_number' => 'Sister Number',
            'position_brother' => 'Position Brother',
            'house_room' => 'House Room',
            'rent_owned' => 'Rent Owned',
            'house_structure' => 'House Structure',
            'family_earning' => 'Family Earning',
            'marital_status' => 'Marital Status',
            'spouse_name' => 'Spouse Name',
            'spouse_profession' => 'Spouse Profession',
            'spouse_address' => 'Spouse Address',
            'spouse_city' => 'Spouse City',
            'spouse_number' => 'Spouse Number',
            'patient_number_husband_multiple_marriage' => 'Patient# Husband Multiple Marriage',
            'family_joint_earning' => 'Family Joint Earning',
            'bread_line' => 'Bread Line',
            'children_number' => 'Children Number',
            'boys_number' => 'Boys Number',
            'boys_age' => 'Boys Age',
            'girls_number' => 'Girls Number',
            'girls_age' => 'Girls Age',
            'spouse_children_number' => 'Spouse Children Number',
            'house_room_number' => 'House Room Number',
            'family_member_in_house' => 'Family Member In House',
            'comments_remarks' => 'Comments Remarks',
        ];
    }
}
