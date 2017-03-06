<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfHospital;

/**
 * AsfHospitalSearch represents the model behind the search form about `common\models\AsfHospital`.
 */
class AsfHospitalSearch extends AsfHospital
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nhc_id'], 'integer'],
            [['hospital_type'], 'safe'],
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
        $query = AsfHospital::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'nhc_id' => $this->nhc_id,
        ]);

        $query->andFilterWhere(['like', 'hospital_type', $this->hospital_type]);

        return $dataProvider;
    }
}
