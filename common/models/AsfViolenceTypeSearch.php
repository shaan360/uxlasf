<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfViolenceType;

/**
 * AsfViolenceTypeSearch represents the model behind the search form about `common\models\AsfViolenceType`.
 */
class AsfViolenceTypeSearch extends AsfViolenceType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vt_id'], 'integer'],
            [['violence_type'], 'safe'],
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
        $query = AsfViolenceType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'vt_id' => $this->vt_id,
        ]);

        $query->andFilterWhere(['like', 'violence_type', $this->violence_type]);

        return $dataProvider;
    }
}
