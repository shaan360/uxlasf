<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfSocioEconomicInfo;

/**
 * AsfSocioEconomicInfoSearch represents the model behind the search form about `common\models\AsfSocioEconomicInfo`.
 */
class AsfSocioEconomicInfoSearch extends AsfSocioEconomicInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['survivor_id', 'ncru_date', 'ncru_evaluated', 'ncru_project', 'ncru_evaluated_by', 'ncru_need_assistance', 'ncru_urgent', 'sen_education_support', 'sen_vocational_training', 'sen_job_placement', 'sen_business_plan', 'sen_entrepreneurship', 'es_date', 'es_project', 'es_type', 'jp_place', 'jp_amount', 'jp_project', 'jp_date', 'e_ship_date', 'jp_type', 'e_ship_type', 'e_ship_amount', 'e_ship_place', 'bp_implementation_date', 'e_ship_project', 'vt_type', 'vt_place', 'vt_project', 'vt_date', 'es_amount', 'vt_amount', 'bp_date', 'bp_amount', 'bp_support_recommended', 'bp_made_by', 'bp_project', 'bp_place', 'comments_remarks'], 'safe'],
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
        $query = AsfSocioEconomicInfo::find();

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
            ->andFilterWhere(['like', 'sen_education_support', $this->sen_education_support])
            ->andFilterWhere(['like', 'sen_vocational_training', $this->sen_vocational_training])
            ->andFilterWhere(['like', 'sen_job_placement', $this->sen_job_placement])
            ->andFilterWhere(['like', 'sen_business_plan', $this->sen_business_plan])
            ->andFilterWhere(['like', 'sen_entrepreneurship', $this->sen_entrepreneurship])
            ->andFilterWhere(['like', 'es_date', $this->es_date])
            ->andFilterWhere(['like', 'es_project', $this->es_project])
            ->andFilterWhere(['like', 'es_type', $this->es_type])
            ->andFilterWhere(['like', 'jp_place', $this->jp_place])
            ->andFilterWhere(['like', 'jp_amount', $this->jp_amount])
            ->andFilterWhere(['like', 'jp_project', $this->jp_project])
            ->andFilterWhere(['like', 'jp_date', $this->jp_date])
            ->andFilterWhere(['like', 'e_ship_date', $this->e_ship_date])
            ->andFilterWhere(['like', 'jp_type', $this->jp_type])
            ->andFilterWhere(['like', 'e_ship_type', $this->e_ship_type])
            ->andFilterWhere(['like', 'e_ship_amount', $this->e_ship_amount])
            ->andFilterWhere(['like', 'e_ship_place', $this->e_ship_place])
            ->andFilterWhere(['like', 'bp_implementation_date', $this->bp_implementation_date])
            ->andFilterWhere(['like', 'e_ship_project', $this->e_ship_project])
            ->andFilterWhere(['like', 'vt_type', $this->vt_type])
            ->andFilterWhere(['like', 'vt_place', $this->vt_place])
            ->andFilterWhere(['like', 'vt_project', $this->vt_project])
            ->andFilterWhere(['like', 'vt_date', $this->vt_date])
            ->andFilterWhere(['like', 'es_amount', $this->es_amount])
            ->andFilterWhere(['like', 'vt_amount', $this->vt_amount])
            ->andFilterWhere(['like', 'bp_date', $this->bp_date])
            ->andFilterWhere(['like', 'bp_amount', $this->bp_amount])
            ->andFilterWhere(['like', 'bp_support_recommended', $this->bp_support_recommended])
            ->andFilterWhere(['like', 'bp_made_by', $this->bp_made_by])
            ->andFilterWhere(['like', 'bp_project', $this->bp_project])
            ->andFilterWhere(['like', 'bp_place', $this->bp_place])
            ->andFilterWhere(['like', 'comments_remarks', $this->comments_remarks]);

        return $dataProvider;
    }
}
