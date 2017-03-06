<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_psychological_info".
 *
 * @property integer $id
 * @property string $survivor_id
 * @property string $ncru_date
 * @property string $ncru_evaluated
 * @property string $ncru_project
 * @property string $ncru_evaluated_by
 * @property string $ncru_need_assistance
 * @property string $ncru_urgent
 * @property string $pe_date
 * @property string $pe_evaluated
 * @property string $pe_project
 * @property string $pe_evaluated_by
 * @property string $pe_contact
 * @property string $pe_evaluated_at
 * @property string $pe_psychological_issue
 * @property string $pe_psychiatric_issue
 * @property string $next_follow_date
 * @property string $follow_required
 * @property string $pe_further_assistance
 * @property string $pe_diagnosis
 * @property string $pe_within_weeks
 * @property string $pe_recommended_date
 * @property string $comments_remarks
 */
class AsfPsychologicalInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_psychological_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['survivor_id', 'ncru_evaluated', 'ncru_project', 'ncru_evaluated_by', 'ncru_need_assistance', 'ncru_urgent', 'pe_evaluated', 'pe_project', 'pe_evaluated_by', 'pe_contact', 'pe_evaluated_at', 'pe_psychological_issue', 'pe_psychiatric_issue', 'follow_required', 'pe_further_assistance', 'pe_diagnosis', 'pe_within_weeks'], 'required'],
            [['ncru_evaluated', 'ncru_need_assistance', 'ncru_urgent', 'pe_evaluated', 'pe_psychological_issue', 'pe_psychiatric_issue', 'follow_required', 'pe_further_assistance', 'comments_remarks'], 'string'],
            [['survivor_id', 'ncru_date', 'ncru_project', 'ncru_evaluated_by', 'pe_date', 'pe_project', 'pe_evaluated_by', 'pe_contact', 'pe_evaluated_at', 'next_follow_date', 'pe_diagnosis', 'pe_within_weeks', 'pe_recommended_date'], 'string', 'max' => 255],
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
            'ncru_date' => 'Ncru Date',
            'ncru_evaluated' => 'Ncru Evaluated',
            'ncru_project' => 'Ncru Project',
            'ncru_evaluated_by' => 'Ncru Evaluated By',
            'ncru_need_assistance' => 'Ncru Need Assistance',
            'ncru_urgent' => 'Ncru Urgent',
            'pe_date' => 'Pe Date',
            'pe_evaluated' => 'Pe Evaluated',
            'pe_project' => 'Pe Project',
            'pe_evaluated_by' => 'Pe Evaluated By',
            'pe_contact' => 'Pe Contact',
            'pe_evaluated_at' => 'Pe Evaluated At',
            'pe_psychological_issue' => 'Pe Psychological Issue',
            'pe_psychiatric_issue' => 'Pe Psychiatric Issue',
            'next_follow_date' => 'Next Follow Date',
            'follow_required' => 'Follow Required',
            'pe_further_assistance' => 'Pe Further Assistance',
            'pe_diagnosis' => 'Pe Diagnosis',
            'pe_within_weeks' => 'Pe Within Weeks',
            'pe_recommended_date' => 'Pe Recommended Date',
            'comments_remarks' => 'Comments Remarks',
        ];
    }
}
