<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "asf_medical_aid".
 *
 * @property integer $id
 * @property string $survivor_id
 * @property string $asf_medical_provided
 * @property string $medical_aid_date
 * @property string $project
 * @property string $asf_nutrition_provided
 * @property string $asf_nutrition_project
 * @property string $asf_physiotherapy_provided
 * @property string $asf_physiotherapy_project
 * @property string $treatment_area
 * @property string $assessment
 * @property string $assessment_date
 * @property string $procedure
 * @property string $associated_procedure
 * @property integer $procedure_number
 * @property integer $assessment_number
 * @property string $medicine
 * @property string $medicine_expense
 * @property string $doctor_name
 * @property string $hospital_clinic_name
 * @property string $asf_stayed_days
 * @property string $ncru_discharge_date
 * @property string $ncru_admission_date
 * @property string $medical_follow_up
 * @property string $days_at_hospital
 * @property string $hospital_admission_date
 * @property string $procedure_date
 * @property string $hospital_discharge_date
 * @property string $stay_at_ncru
 * @property string $comments_remarks
 */
class AsfMedicalAid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asf_medical_aid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['survivor_id', 'asf_medical_provided', 'medical_aid_date', 'project', 'asf_nutrition_provided', 'asf_nutrition_project', 'asf_physiotherapy_provided', 'asf_physiotherapy_project', 'treatment_area', 'assessment', 'assessment_date', 'procedure', 'associated_procedure', 'procedure_number', 'assessment_number', 'medicine', 'medicine_expense', 'doctor_name', 'hospital_clinic_name', 'asf_stayed_days', 'ncru_discharge_date', 'ncru_admission_date', 'medical_follow_up', 'days_at_hospital', 'hospital_admission_date', 'procedure_date', 'hospital_discharge_date', 'stay_at_ncru', 'comments_remarks'], 'required'],
            [['asf_medical_provided', 'asf_nutrition_provided', 'asf_physiotherapy_provided', 'assessment', 'medicine', 'medical_follow_up', 'stay_at_ncru', 'comments_remarks'], 'string'],
            [['procedure_number', 'assessment_number'], 'integer'],
            [['survivor_id', 'medical_aid_date', 'project', 'asf_nutrition_project', 'asf_physiotherapy_project', 'treatment_area', 'assessment_date', 'procedure', 'associated_procedure', 'medicine_expense', 'doctor_name', 'hospital_clinic_name', 'asf_stayed_days', 'ncru_discharge_date', 'ncru_admission_date', 'days_at_hospital', 'hospital_admission_date', 'procedure_date', 'hospital_discharge_date'], 'string', 'max' => 255],
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
            'asf_medical_provided' => 'Asf Medical Provided',
            'medical_aid_date' => 'Medical Aid Date',
            'project' => 'Project',
            'asf_nutrition_provided' => 'Asf Nutrition Provided',
            'asf_nutrition_project' => 'Asf Nutrition Project',
            'asf_physiotherapy_provided' => 'Asf Physiotherapy Provided',
            'asf_physiotherapy_project' => 'Asf Physiotherapy Project',
            'treatment_area' => 'Treatment Area',
            'assessment' => 'Assessment',
            'assessment_date' => 'Assessment Date',
            'procedure' => 'Procedure',
            'associated_procedure' => 'Associated Procedure',
            'procedure_number' => 'Procedure Number',
            'assessment_number' => 'Assessment Number',
            'medicine' => 'Medicine',
            'medicine_expense' => 'Medicine Expense',
            'doctor_name' => 'Doctor Name',
            'hospital_clinic_name' => 'Hospital Clinic Name',
            'asf_stayed_days' => 'Asf Stayed Days',
            'ncru_discharge_date' => 'Ncru Discharge Date',
            'ncru_admission_date' => 'Ncru Admission Date',
            'medical_follow_up' => 'Medical Follow Up',
            'days_at_hospital' => 'Days At Hospital',
            'hospital_admission_date' => 'Hospital Admission Date',
            'procedure_date' => 'Procedure Date',
            'hospital_discharge_date' => 'Hospital Discharge Date',
            'stay_at_ncru' => 'Stay At Ncru',
            'comments_remarks' => 'Comments Remarks',
        ];
    }
}
