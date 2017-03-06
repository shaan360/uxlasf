<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_survivor_info".
 *
 * @property integer $id
 * @property string $attack_id
 * @property string $survivor_id
 * @property string $accident_suicide
 * @property string $survivor_stat
 * @property string $asf_reported_day
 * @property string $asf_reported_month
 * @property string $asf_reported_mon
 * @property string $asf_reported_year
 * @property string $asf_assisted
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $cnic_availible
 * @property integer $cnic
 * @property string $gender
 * @property string $incident_date
 * @property string $before_year
 * @property integer $attacked_age
 * @property string $maturity
 * @property string $incident_place
 * @property string $incident_area
 * @property string $incident_province
 * @property string $incident_district
 * @property string $incident_city
 * @property integer $attack_number
 * @property integer $victim_number
 * @property string $victim_perpetrator
 * @property string $attack_reason
 * @property integer $allegated_number
 * @property string $allegated_names
 * @property string $contact_phone
 * @property string $birth_day
 * @property string $birth_month
 * @property string $birth_year
 * @property string $current_age
 * @property string $survivor_address
 * @property string $address_street
 * @property string $follow_up_visit
 * @property string $case_registered
 * @property string $lawyer_provided
 * @property string $panel_code_section
 * @property string $case_number
 * @property string $other_panel_section
 * @property string $asf_legel_support
 * @property string $follow_up_call
 * @property string $verdict_date
 * @property string $actual_perpetrator_different
 * @property string $actual_perpetrator
 * @property string $conviction_date
 * @property string $convicted
 * @property string $verdict
 * @property string $fir_number
 * @property string $lawyer_name
 * @property string $literate
 * @property string $fir_date
 * @property string $address_province
 * @property string $address_city
 * @property string $address_district
 * @property string $father_name
 * @property string $fir_registered
 * @property string $police_station
 * @property string $other_document
 * @property string $medical_legal_certificate
 * @property string $picture
 * @property string $fir
 * @property string $comments_remarks
 * @property string $pictureFile
 * @property string $firFile
 * @property string $medicalFile
 * @property string $otherFile
 * @property string $court_settlement
 * @property string $settlement_agreement
 * @property string $settlement_monetary
 * @property string $monetary_amount
 */
class AsfSurvivorInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_survivor_info';
    }
    public $pic, $pic2, $pic3, $pic4;
    public $username;
    public function behaviors() {
        return [
            'pic' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic',
                'pathAttribute' => 'pictureFile',
                'baseUrlAttribute' => 'photo_path'
            ],
            'pic2' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic2',
                'pathAttribute' => 'firFile',
                'baseUrlAttribute' => 'photo_path',
               
            ],
            'pic3' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic3',
                'pathAttribute' => 'medicalFile',
                'baseUrlAttribute' => 'photo_path'
            ],
            'pic4' => [
                'class' => \trntv\filekit\behaviors\UploadBehavior::className(),
                'attribute' => 'pic4',
                'pathAttribute' => 'otherFile',
                'baseUrlAttribute' => 'photo_path'
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['attack_id', 'survivor_id', 'accident_suicide', 'survivor_stat', 'asf_assisted', 'first_name', 'middle_name', 'last_name', 'cnic_availible', 'cnic', 'gender', 'before_year', 'attacked_age', 'maturity', 'incident_place', 'incident_area', 'incident_province', 'incident_district', 'incident_city', 'attack_number', 'victim_number', 'victim_perpetrator', 'attack_reason', 'allegated_number', 'allegated_names', 'contact_phone', 'current_age', 'survivor_address', 'address_street', 'follow_up_visit', 'case_registered', 'lawyer_provided', 'panel_code_section', 'case_number', 'other_panel_section', 'asf_legel_support', 'follow_up_call', 'actual_perpetrator_different', 'actual_perpetrator', 'convicted', 'verdict', 'fir_number', 'lawyer_name', 'literate', 'address_province', 'address_city', 'address_district', 'father_name', 'fir_registered', 'police_station', 'other_document', 'medical_legal_certificate', 'picture', 'fir', 'comments_remarks','court_settlement', 'settlement_agreement', 'settlement_monetary', 'monetary_amount'], 'required'],
            [['accident_suicide', 'survivor_stat', 'asf_reported_day', 'asf_reported_month', 'asf_reported_mon', 'gender', 'maturity', 'incident_province', 'attack_reason', 'birth_day', 'birth_month', 'follow_up_visit', 'case_registered', 'lawyer_provided', 'panel_code_section', 'asf_legel_support', 'follow_up_call', 'actual_perpetrator_different', 'literate', 'address_province', 'fir_registered', 'other_document', 'medical_legal_certificate', 'picture', 'fir', 'comments_remarks', 'court_settlement', 'settlement_agreement', 'settlement_monetary'], 'string'],
            [['cnic', 'attacked_age', 'attack_number', 'victim_number', 'allegated_number'], 'integer'],
            [['file_path','pic', 'pic2', 'pic3', 'pic4'], 'safe'],
            [['attack_id', 'survivor_id', 'asf_reported_year', 'asf_assisted', 'first_name', 'middle_name', 'last_name', 'cnic_availible', 'incident_date', 'before_year', 'incident_place', 'incident_area', 'incident_district', 'incident_city', 'victim_perpetrator', 'allegated_names', 'contact_phone', 'birth_year', 'current_age', 'survivor_address', 'address_street', 'case_number', 'other_panel_section', 'verdict_date', 'actual_perpetrator', 'conviction_date', 'convicted', 'verdict', 'fir_number', 'lawyer_name', 'fir_date', 'address_city', 'address_district', 'father_name', 'police_station', 'pictureFile', 'firFile', 'medicalFile', 'otherFile', 'monetary_amount'], 'string', 'max' => 255],
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
            'attack_id' => 'Attack ID',
            'survivor_id' => 'Survivor ID',
            'accident_suicide' => 'Accident Suicide',
            'survivor_stat' => 'Survivor Stat',
            'asf_reported_day' => 'Asf Reported Day',
            'asf_reported_month' => 'Asf Reported Month',
            'asf_reported_mon' => 'Asf Reported Mon',
            'asf_reported_year' => 'Asf Reported Year',
            'asf_assisted' => 'Asf Assisted',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'cnic_availible' => 'Cnic Availible',
            'cnic' => 'Cnic',
            'gender' => 'Gender',
            'incident_date' => 'Incident Date',
            'before_year' => 'Before Year',
            'attacked_age' => 'Attacked Age',
            'maturity' => 'Maturity',
            'incident_place' => 'Incident Place',
            'incident_area' => 'Incident Area',
            'incident_province' => 'Incident Province',
            'incident_district' => 'Incident District',
            'incident_city' => 'Incident City',
            'attack_number' => 'Number Of Attacks',
            'victim_number' => 'Number Of Victims',
            'victim_perpetrator' => 'Victim Perpetrator',
            'attack_reason' => 'Attack Reason',
            'allegated_number' => 'Allegated Number',
            'allegated_names' => 'Allegated Names',
            'contact_phone' => 'Contact Phone',
            'birth_day' => 'Birth Day',
            'birth_month' => 'Birth Month',
            'birth_year' => 'Birth Year',
            'current_age' => 'Current Age',
            'survivor_address' => 'Survivor Address',
            'address_street' => 'Address Street',
            'follow_up_visit' => 'Follow Up Visit',
            'case_registered' => 'Case Registered',
            'lawyer_provided' => 'Lawyer Provided',
            'panel_code_section' => 'Panel Code Section',
            'case_number' => 'Case Number',
            'other_panel_section' => 'Other Panel Section',
            'asf_legel_support' => 'Asf Legel Support',
            'follow_up_call' => 'Follow Up Call',
            'verdict_date' => 'Verdict Date',
            'actual_perpetrator_different' => 'Actual Perpetrator Different',
            'actual_perpetrator' => 'Actual Perpetrator',
            'conviction_date' => 'Conviction Date',
            'convicted' => 'Convicted',
            'verdict' => 'Verdict',
            'fir_number' => 'Fir Number',
            'lawyer_name' => 'Lawyer Name',
            'literate' => 'Literate',
            'fir_date' => 'Fir Date',
            'address_province' => 'Address Province',
            'address_city' => 'Address City',
            'address_district' => 'Address District',
            'father_name' => 'Father Name',
            'fir_registered' => 'Fir Registered',
            'police_station' => 'Police Station',
            'other_document' => 'Other Document',
            'medical_legal_certificate' => 'Medical Legal Certificate',
            'picture' => 'Picture',
            'fir' => 'Fir',
            'comments_remarks' => 'Comments Remarks',
            'pic' => 'Picture File',
            'pic2' => 'Fir File',
            'pic3' => 'Medical File',
            'pic4' => 'Other File',
            'court_settlement' => 'Court Settlement',
            'settlement_agreement' => 'Settlement Agreement',
            'settlement_monetary' => 'Settlement Monetary',
            'monetary_amount' => 'Monetary Amount',
        ];
    }
}
