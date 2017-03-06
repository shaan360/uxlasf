<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfPsychologicalInfo;

/**
 * AsfPsychologicalInfoSearch represents the model behind the search form about `common\models\AsfPsychologicalInfo`.
 */
class AsfPsychologicalInfoSearch extends AsfPsychologicalInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['survivor_id', 'ncru_date', 'ncru_evaluated', 'ncru_project', 'ncru_evaluated_by', 'ncru_need_assistance', 'ncru_urgent', 'pe_date', 'pe_evaluated', 'pe_project', 'pe_evaluated_by', 'pe_contact', 'pe_evaluated_at', 'pe_psychological_issue', 'pe_psychiatric_issue', 'next_follow_date', 'follow_required', 'pe_further_assistance', 'pe_diagnosis', 'pe_within_weeks', 'pe_recommended_date', 'comments_remarks'], 'safe'],
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
        $query = AsfPsychologicalInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'survivor_id', $this->survivor_id])
            ->andFilterWhere(['like', 'ncru_date', $this->ncru_date])
            ->andFilterWhere(['like', 'ncru_evaluated', $this->ncru_evaluated])
            ->andFilterWhere(['like', 'ncru_project', $this->ncru_project])
            ->andFilterWhere(['like', 'ncru_evaluated_by', $this->ncru_evaluated_by])
            ->andFilterWhere(['like', 'ncru_need_assistance', $this->ncru_need_assistance])
            ->andFilterWhere(['like', 'ncru_urgent', $this->ncru_urgent])
            ->andFilterWhere(['like', 'pe_date', $this->pe_date])
            ->andFilterWhere(['like', 'pe_evaluated', $this->pe_evaluated])
            ->andFilterWhere(['like', 'pe_project', $this->pe_project])
            ->andFilterWhere(['like', 'pe_evaluated_by', $this->pe_evaluated_by])
            ->andFilterWhere(['like', 'pe_contact', $this->pe_contact])
            ->andFilterWhere(['like', 'pe_evaluated_at', $this->pe_evaluated_at])
            ->andFilterWhere(['like', 'pe_psychological_issue', $this->pe_psychological_issue])
            ->andFilterWhere(['like', 'pe_psychiatric_issue', $this->pe_psychiatric_issue])
            ->andFilterWhere(['like', 'next_follow_date', $this->next_follow_date])
            ->andFilterWhere(['like', 'follow_required', $this->follow_required])
            ->andFilterWhere(['like', 'pe_further_assistance', $this->pe_further_assistance])
            ->andFilterWhere(['like', 'pe_diagnosis', $this->pe_diagnosis])
            ->andFilterWhere(['like', 'pe_within_weeks', $this->pe_within_weeks])
            ->andFilterWhere(['like', 'pe_recommended_date', $this->pe_recommended_date])
            ->andFilterWhere(['like', 'comments_remarks', $this->comments_remarks]);

        return $dataProvider;
    }
}
