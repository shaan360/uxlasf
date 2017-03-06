<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfReason;

/**
 * AsfReasonSearch represents the model behind the search form about `common\models\AsfReason`.
 */
class AsfReasonSearch extends AsfReason
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nr_id'], 'integer'],
            [['reason_type'], 'safe'],
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
        $query = AsfReason::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'nr_id' => $this->nr_id,
        ]);

        $query->andFilterWhere(['like', 'reason_type', $this->reason_type]);

        return $dataProvider;
    }
}
