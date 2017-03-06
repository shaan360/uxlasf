<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfPerpetrator;

/**
 * AsfPerpetratorSearch represents the model behind the search form about `common\models\AsfPerpetrator`.
 */
class AsfPerpetratorSearch extends AsfPerpetrator
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nlp_id'], 'integer'],
            [['perpetrator_type'], 'safe'],
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
        $query = AsfPerpetrator::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'nlp_id' => $this->nlp_id,
        ]);

        $query->andFilterWhere(['like', 'perpetrator_type', $this->perpetrator_type]);

        return $dataProvider;
    }
}
