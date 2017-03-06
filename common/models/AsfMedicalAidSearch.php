<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfMedicalAid;

/**
 * AsfMedicalAidSearch represents the model behind the search form about `common\models\AsfMedicalAid`.
 */
class AsfMedicalAidSearch extends AsfMedicalAid
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'procedure_number', 'assessment_number'], 'integer'],
            [['survivor_id', 'asf_medical_provided', 'medical_aid_date', 'project', 'asf_nutrition_provided', 'asf_nutrition_project', 'asf_physiotherapy_provided', 'asf_physiotherapy_project', 'treatment_area', 'assessment', 'assessment_date', 'procedure', 'associated_procedure', 'medicine', 'medicine_expense', 'doctor_name', 'hospital_clinic_name', 'asf_stayed_days', 'ncru_discharge_date', 'ncru_admission_date', 'medical_follow_up', 'days_at_hospital', 'hospital_admission_date', 'procedure_date', 'hospital_discharge_date', 'stay_at_ncru', 'comments_remarks'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AsfMedicalAid::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'procedure_number' => $this->procedure_number,
            'assessment_number' => $this->assessment_number,
        ]);

        $query->andFilterWhere(['like', 'survivor_id', $this->survivor_id])
            ->andFilterWhere(['like', 'asf_medical_provided', $this->asf_medical_provided])
            ->andFilterWhere(['like', 'medical_aid_date', $this->medical_aid_date])
            ->andFilterWhere(['like', 'project', $this->project])
            ->andFilterWhere(['like', 'asf_nutrition_provided', $this->asf_nutrition_provided])
            ->andFilterWhere(['like', 'asf_nutrition_project', $this->asf_nutrition_project])
            ->andFilterWhere(['like', 'asf_physiotherapy_provided', $this->asf_physiotherapy_provided])
            ->andFilterWhere(['like', 'asf_physiotherapy_project', $this->asf_physiotherapy_project])
            ->andFilterWhere(['like', 'treatment_area', $this->treatment_area])
            ->andFilterWhere(['like', 'assessment', $this->assessment])
            ->andFilterWhere(['like', 'assessment_date', $this->assessment_date])
            ->andFilterWhere(['like', 'procedure', $this->procedure])
            ->andFilterWhere(['like', 'associated_procedure', $this->associated_procedure])
            ->andFilterWhere(['like', 'medicine', $this->medicine])
            ->andFilterWhere(['like', 'medicine_expense', $this->medicine_expense])
            ->andFilterWhere(['like', 'doctor_name', $this->doctor_name])
            ->andFilterWhere(['like', 'hospital_clinic_name', $this->hospital_clinic_name])
            ->andFilterWhere(['like', 'asf_stayed_days', $this->asf_stayed_days])
            ->andFilterWhere(['like', 'ncru_discharge_date', $this->ncru_discharge_date])
            ->andFilterWhere(['like', 'ncru_admission_date', $this->ncru_admission_date])
            ->andFilterWhere(['like', 'medical_follow_up', $this->medical_follow_up])
            ->andFilterWhere(['like', 'days_at_hospital', $this->days_at_hospital])
            ->andFilterWhere(['like', 'hospital_admission_date', $this->hospital_admission_date])
            ->andFilterWhere(['like', 'procedure_date', $this->procedure_date])
            ->andFilterWhere(['like', 'hospital_discharge_date', $this->hospital_discharge_date])
            ->andFilterWhere(['like', 'stay_at_ncru', $this->stay_at_ncru])
            ->andFilterWhere(['like', 'comments_remarks', $this->comments_remarks]);

        return $dataProvider;
    }
}
