<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\InstallmentPlan;

/**
 * InstallmentPlanSearch represents the model behind the search form about `common\models\InstallmentPlan`.
 */
class InstallmentPlanSearch extends InstallmentPlan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'last_updated_by'], 'integer'],
            [['installment_plan_name', 'note', 'created_on'], 'safe'],
            [['installment_plan_price', 'installment_downpayment_percentage'], 'number'],
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
        $query = InstallmentPlan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'installment_plan_price' => $this->installment_plan_price,
            'installment_downpayment_percentage' => $this->installment_downpayment_percentage,
            'created_by' => $this->created_by,
            'created_on' => $this->created_on,
            'last_updated_by' => $this->last_updated_by,
        ]);

        $query->andFilterWhere(['like', 'installment_plan_name', $this->installment_plan_name])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
