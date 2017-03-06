<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfLegalAid;

/**
 * AsfLegalAidSearch represents the model behind the search form about `common\models\AsfLegalAid`.
 */
class AsfLegalAidSearch extends AsfLegalAid
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['legal_id'], 'integer'],
            [['survivor_id', 'asf_legal_input', 'legal_support_date', 'legal_project', 'legal_followup', 'legal_advice', 'legal_lawyer_support', 'legal_lawyer_name', 'legal_lawyer_contact', 'legal_police_investigation', 'legal_prosecuted', 'legal_court_case', 'legal_court_name', 'legal_court_place', 'legal_judge_name', 'legal_hearing', 'legal_hearing_number', 'legal_withdrawn_date', 'legal_conviction', 'legal_conviction_date', 'legal_case_withdrawn', 'comments_remarks'], 'safe'],
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
        $query = AsfLegalAid::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'legal_id' => $this->legal_id,
        ]);

        $query->andFilterWhere(['like', 'survivor_id', $this->survivor_id])
            ->andFilterWhere(['like', 'asf_legal_input', $this->asf_legal_input])
            ->andFilterWhere(['like', 'legal_support_date', $this->legal_support_date])
            ->andFilterWhere(['like', 'legal_project', $this->legal_project])
            ->andFilterWhere(['like', 'legal_followup', $this->legal_followup])
            ->andFilterWhere(['like', 'legal_advice', $this->legal_advice])
            ->andFilterWhere(['like', 'legal_lawyer_support', $this->legal_lawyer_support])
            ->andFilterWhere(['like', 'legal_lawyer_name', $this->legal_lawyer_name])
            ->andFilterWhere(['like', 'legal_lawyer_contact', $this->legal_lawyer_contact])
            ->andFilterWhere(['like', 'legal_police_investigation', $this->legal_police_investigation])
            ->andFilterWhere(['like', 'legal_prosecuted', $this->legal_prosecuted])
            ->andFilterWhere(['like', 'legal_court_case', $this->legal_court_case])
            ->andFilterWhere(['like', 'legal_court_name', $this->legal_court_name])
            ->andFilterWhere(['like', 'legal_court_place', $this->legal_court_place])
            ->andFilterWhere(['like', 'legal_judge_name', $this->legal_judge_name])
            ->andFilterWhere(['like', 'legal_hearing', $this->legal_hearing])
            ->andFilterWhere(['like', 'legal_hearing_number', $this->legal_hearing_number])
            ->andFilterWhere(['like', 'legal_withdrawn_date', $this->legal_withdrawn_date])
            ->andFilterWhere(['like', 'legal_conviction', $this->legal_conviction])
            ->andFilterWhere(['like', 'legal_conviction_date', $this->legal_conviction_date])
            ->andFilterWhere(['like', 'legal_case_withdrawn', $this->legal_case_withdrawn])
            ->andFilterWhere(['like', 'comments_remarks', $this->comments_remarks]);

        return $dataProvider;
    }
}
