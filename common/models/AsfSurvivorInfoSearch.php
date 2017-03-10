<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfSurvivorInfo;

/**
 * AsfSurvivorInfoSearch represents the model behind the search form about `common\models\AsfSurvivorInfo`.
 */
class AsfSurvivorInfoSearch extends AsfSurvivorInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cnic', 'attacked_age', 'attack_number', 'victim_number', 'allegated_number'], 'integer'],
            [['attack_id', 'survivor_id', 'accident_suicide', 'survivor_stat', 'asf_reported_day', 'asf_reported_month', 'asf_reported_mon', 'asf_reported_year', 'asf_assisted', 'first_name', 'middle_name', 'last_name', 'cnic_availible', 'gender', 'incident_date', 'before_year', 'maturity', 'incident_place', 'incident_area', 'incident_province', 'incident_district', 'incident_city', 'victim_perpetrator', 'attack_reason', 'allegated_names', 'contact_phone', 'birth_day', 'birth_month', 'birth_year', 'current_age', 'survivor_address', 'address_street', 'follow_up_visit', 'case_registered', 'lawyer_provided', 'panel_code_section', 'case_number', 'other_panel_section', 'asf_legel_support', 'follow_up_call', 'verdict_date', 'actual_perpetrator_different', 'actual_perpetrator', 'conviction_date', 'convicted', 'verdict', 'fir_number', 'lawyer_name', 'literate', 'fir_date', 'address_province', 'address_city', 'address_district', 'father_name', 'fir_registered', 'police_station', 'other_document', 'medical_legal_certificate', 'picture', 'fir', 'comments_remarks', 'pictureFile', 'firFile', 'medicalFile', 'otherFile', 'court_settlement', 'settlement_agreement', 'settlement_monetary', 'monetary_amount'], 'safe'],
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
        $query = AsfSurvivorInfo::find();
      //  var_dump($query);exit;
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
      //   var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        $query->andFilterWhere([
            'id' => $this->id,
            'cnic' => $this->cnic,
            'attacked_age' => $this->attacked_age,
            'attack_number' => $this->attack_number,
            'victim_number' => $this->victim_number,
            'allegated_number' => $this->allegated_number,
        ]);

        $query->andFilterWhere(['like', 'attack_id', $this->attack_id])
            ->andFilterWhere(['like', 'survivor_id', $this->survivor_id])
            ->andFilterWhere(['like', 'accident_suicide', $this->accident_suicide])
            ->andFilterWhere(['like', 'survivor_stat', $this->survivor_stat])
            ->andFilterWhere(['like', 'asf_reported_day', $this->asf_reported_day])
            ->andFilterWhere(['like', 'asf_reported_month', $this->asf_reported_month])
            ->andFilterWhere(['like', 'asf_reported_mon', $this->asf_reported_mon])
            ->andFilterWhere(['like', 'asf_reported_year', $this->asf_reported_year])
            ->andFilterWhere(['like', 'asf_assisted', $this->asf_assisted])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'cnic_availible', $this->cnic_availible])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'incident_date', $this->incident_date])
            ->andFilterWhere(['like', 'before_year', $this->before_year])
            ->andFilterWhere(['like', 'maturity', $this->maturity])
            ->andFilterWhere(['like', 'incident_place', $this->incident_place])
            ->andFilterWhere(['like', 'incident_area', $this->incident_area])
            ->andFilterWhere(['like', 'incident_province', $this->incident_province])
            ->andFilterWhere(['like', 'incident_district', $this->incident_district])
            ->andFilterWhere(['like', 'incident_city', $this->incident_city])
            ->andFilterWhere(['like', 'victim_perpetrator', $this->victim_perpetrator])
            ->andFilterWhere(['like', 'attack_reason', $this->attack_reason])
            ->andFilterWhere(['like', 'allegated_names', $this->allegated_names])
            ->andFilterWhere(['like', 'contact_phone', $this->contact_phone])
            ->andFilterWhere(['like', 'birth_day', $this->birth_day])
            ->andFilterWhere(['like', 'birth_month', $this->birth_month])
            ->andFilterWhere(['like', 'birth_year', $this->birth_year])
            ->andFilterWhere(['like', 'current_age', $this->current_age])
            ->andFilterWhere(['like', 'survivor_address', $this->survivor_address])
            ->andFilterWhere(['like', 'address_street', $this->address_street])
            ->andFilterWhere(['like', 'follow_up_visit', $this->follow_up_visit])
            ->andFilterWhere(['like', 'case_registered', $this->case_registered])
            ->andFilterWhere(['like', 'lawyer_provided', $this->lawyer_provided])
            ->andFilterWhere(['like', 'panel_code_section', $this->panel_code_section])
            ->andFilterWhere(['like', 'case_number', $this->case_number])
            ->andFilterWhere(['like', 'other_panel_section', $this->other_panel_section])
            ->andFilterWhere(['like', 'asf_legel_support', $this->asf_legel_support])
            ->andFilterWhere(['like', 'follow_up_call', $this->follow_up_call])
            ->andFilterWhere(['like', 'verdict_date', $this->verdict_date])
            ->andFilterWhere(['like', 'actual_perpetrator_different', $this->actual_perpetrator_different])
            ->andFilterWhere(['like', 'actual_perpetrator', $this->actual_perpetrator])
            ->andFilterWhere(['like', 'conviction_date', $this->conviction_date])
            ->andFilterWhere(['like', 'convicted', $this->convicted])
            ->andFilterWhere(['like', 'verdict', $this->verdict])
            ->andFilterWhere(['like', 'fir_number', $this->fir_number])
            ->andFilterWhere(['like', 'lawyer_name', $this->lawyer_name])
            ->andFilterWhere(['like', 'literate', $this->literate])
            ->andFilterWhere(['like', 'fir_date', $this->fir_date])
            ->andFilterWhere(['like', 'address_province', $this->address_province])
            ->andFilterWhere(['like', 'address_city', $this->address_city])
            ->andFilterWhere(['like', 'address_district', $this->address_district])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'fir_registered', $this->fir_registered])
            ->andFilterWhere(['like', 'police_station', $this->police_station])
            ->andFilterWhere(['like', 'other_document', $this->other_document])
            ->andFilterWhere(['like', 'medical_legal_certificate', $this->medical_legal_certificate])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'fir', $this->fir])
            ->andFilterWhere(['like', 'comments_remarks', $this->comments_remarks])
            ->andFilterWhere(['like', 'pictureFile', $this->pictureFile])
            ->andFilterWhere(['like', 'firFile', $this->firFile])
            ->andFilterWhere(['like', 'medicalFile', $this->medicalFile])
            ->andFilterWhere(['like', 'otherFile', $this->otherFile])
            ->andFilterWhere(['like', 'court_settlement', $this->court_settlement])
            ->andFilterWhere(['like', 'settlement_agreement', $this->settlement_agreement])
            ->andFilterWhere(['like', 'settlement_monetary', $this->settlement_monetary])
            ->andFilterWhere(['like', 'monetary_amount', $this->monetary_amount]);
   // var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        return $dataProvider;
    }
}
