<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_legal_aid".
 *
 * @property integer $legal_id
 * @property string $survivor_id
 * @property string $asf_legal_input
 * @property string $legal_support_date
 * @property string $legal_project
 * @property string $legal_followup
 * @property string $legal_advice
 * @property string $legal_lawyer_support
 * @property string $legal_lawyer_name
 * @property string $legal_lawyer_contact
 * @property string $legal_police_investigation
 * @property string $legal_prosecuted
 * @property string $legal_court_case
 * @property string $legal_court_name
 * @property string $legal_court_place
 * @property string $legal_judge_name
 * @property string $legal_hearing
 * @property string $legal_hearing_number
 * @property string $legal_withdrawn_date
 * @property string $legal_conviction
 * @property string $legal_conviction_date
 * @property string $legal_case_withdrawn
 * @property string $comments_remarks
 */
class AsfLegalAid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_legal_aid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['survivor_id', 'asf_legal_input', 'legal_support_date', 'legal_project', 'legal_followup', 'legal_advice', 'legal_lawyer_support', 'legal_lawyer_name', 'legal_lawyer_contact', 'legal_police_investigation', 'legal_prosecuted', 'legal_court_case', 'legal_court_name', 'legal_court_place', 'legal_judge_name', 'legal_hearing', 'legal_hearing_number', 'legal_withdrawn_date', 'legal_conviction', 'legal_conviction_date', 'legal_case_withdrawn', 'comments_remarks'], 'required'],
            [['asf_legal_input', 'legal_followup', 'legal_advice', 'legal_lawyer_support', 'legal_police_investigation', 'legal_prosecuted', 'legal_court_case', 'legal_hearing', 'legal_conviction', 'comments_remarks'], 'string'],
            [['survivor_id', 'legal_support_date', 'legal_project', 'legal_lawyer_name', 'legal_lawyer_contact', 'legal_court_name', 'legal_court_place', 'legal_judge_name', 'legal_hearing_number', 'legal_withdrawn_date', 'legal_conviction_date', 'legal_case_withdrawn'], 'string', 'max' => 255],
            [['survivor_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'legal_id' => 'Legal ID',
            'survivor_id' => 'Survivor ID',
            'asf_legal_input' => 'Asf Legal Input',
            'legal_support_date' => 'Legal Support Date',
            'legal_project' => 'Legal Project',
            'legal_followup' => 'Legal Followup',
            'legal_advice' => 'Legal Advice',
            'legal_lawyer_support' => 'Legal Lawyer Support',
            'legal_lawyer_name' => 'Legal Lawyer Name',
            'legal_lawyer_contact' => 'Legal Lawyer Contact',
            'legal_police_investigation' => 'Legal Police Investigation',
            'legal_prosecuted' => 'Legal Prosecuted',
            'legal_court_case' => 'Legal Court Case',
            'legal_court_name' => 'Legal Court Name',
            'legal_court_place' => 'Legal Court Place',
            'legal_judge_name' => 'Legal Judge Name',
            'legal_hearing' => 'Legal Hearing',
            'legal_hearing_number' => 'Legal Hearing Number',
            'legal_withdrawn_date' => 'Legal Withdrawn Date',
            'legal_conviction' => 'Legal Conviction',
            'legal_conviction_date' => 'Legal Conviction Date',
            'legal_case_withdrawn' => 'Legal Case Withdrawn',
            'comments_remarks' => 'Comments Remarks',
        ];
    }
}
