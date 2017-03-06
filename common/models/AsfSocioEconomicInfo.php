<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_socio_economic_info".
 *
 * @property integer $id
 * @property string $survivor_id
 * @property string $ncru_date
 * @property string $ncru_evaluated
 * @property string $ncru_project
 * @property string $ncru_evaluated_by
 * @property string $ncru_need_assistance
 * @property string $ncru_urgent
 * @property string $sen_education_support
 * @property string $sen_vocational_training
 * @property string $sen_job_placement
 * @property string $sen_business_plan
 * @property string $sen_entrepreneurship
 * @property string $es_date
 * @property string $es_project
 * @property string $es_type
 * @property string $jp_place
 * @property string $jp_amount
 * @property string $jp_project
 * @property string $jp_date
 * @property string $e_ship_date
 * @property string $jp_type
 * @property string $e_ship_type
 * @property string $e_ship_amount
 * @property string $e_ship_place
 * @property string $bp_implementation_date
 * @property string $e_ship_project
 * @property string $vt_type
 * @property string $vt_place
 * @property string $vt_project
 * @property string $vt_date
 * @property string $es_amount
 * @property string $vt_amount
 * @property string $bp_date
 * @property string $bp_amount
 * @property string $bp_support_recommended
 * @property string $bp_made_by
 * @property string $bp_project
 * @property string $bp_place
 * @property string $comments_remarks
 */
class AsfSocioEconomicInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_socio_economic_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['survivor_id', 'ncru_date', 'ncru_evaluated', 'ncru_project', 'ncru_evaluated_by', 'ncru_need_assistance', 'ncru_urgent', 'sen_education_support', 'sen_vocational_training', 'sen_job_placement', 'sen_business_plan', 'sen_entrepreneurship', 'es_date', 'es_project', 'es_type', 'jp_place', 'jp_amount', 'jp_project', 'jp_date', 'e_ship_date', 'jp_type', 'e_ship_type', 'e_ship_amount', 'e_ship_place', 'bp_implementation_date', 'e_ship_project', 'vt_type', 'vt_place', 'vt_project', 'vt_date', 'es_amount', 'vt_amount', 'bp_date', 'bp_amount', 'bp_support_recommended', 'bp_made_by', 'bp_project', 'bp_place', 'comments_remarks'], 'required'],
            [['ncru_need_assistance', 'ncru_urgent', 'sen_education_support', 'sen_vocational_training', 'sen_job_placement', 'sen_business_plan', 'sen_entrepreneurship', 'comments_remarks'], 'string'],
            [['survivor_id', 'ncru_date', 'ncru_evaluated', 'ncru_project', 'ncru_evaluated_by', 'es_date', 'es_project', 'es_type', 'jp_place', 'jp_amount', 'jp_project', 'jp_date', 'e_ship_date', 'jp_type', 'e_ship_type', 'e_ship_amount', 'e_ship_place', 'bp_implementation_date', 'e_ship_project', 'vt_type', 'vt_place', 'vt_project', 'vt_date', 'es_amount', 'vt_amount', 'bp_date', 'bp_amount', 'bp_support_recommended', 'bp_made_by', 'bp_project', 'bp_place'], 'string', 'max' => 255],
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
            'sen_education_support' => 'Sen Education Support',
            'sen_vocational_training' => 'Sen Vocational Training',
            'sen_job_placement' => 'Sen Job Placement',
            'sen_business_plan' => 'Sen Business Plan',
            'sen_entrepreneurship' => 'Sen Entrepreneurship',
            'es_date' => 'Es Date',
            'es_project' => 'Es Project',
            'es_type' => 'Es Type',
            'jp_place' => 'Jp Place',
            'jp_amount' => 'Jp Amount',
            'jp_project' => 'Jp Project',
            'jp_date' => 'Jp Date',
            'e_ship_date' => 'E Ship Date',
            'jp_type' => 'Jp Type',
            'e_ship_type' => 'E Ship Type',
            'e_ship_amount' => 'E Ship Amount',
            'e_ship_place' => 'E Ship Place',
            'bp_implementation_date' => 'Bp Implementation Date',
            'e_ship_project' => 'E Ship Project',
            'vt_type' => 'Vt Type',
            'vt_place' => 'Vt Place',
            'vt_project' => 'Vt Project',
            'vt_date' => 'Vt Date',
            'es_amount' => 'Es Amount',
            'vt_amount' => 'Vt Amount',
            'bp_date' => 'Bp Date',
            'bp_amount' => 'Bp Amount',
            'bp_support_recommended' => 'Bp Support Recommended',
            'bp_made_by' => 'Bp Made By',
            'bp_project' => 'Bp Project',
            'bp_place' => 'Bp Place',
            'comments_remarks' => 'Comments Remarks',
        ];
    }
}
