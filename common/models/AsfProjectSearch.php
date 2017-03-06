<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfProject;

/**
 * AsfProjectSearch represents the model behind the search form about `common\models\AsfProject`.
 */
class AsfProjectSearch extends AsfProject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['np_id'], 'integer'],
            [['project_type'], 'safe'],
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
        $query = AsfProject::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'np_id' => $this->np_id,
        ]);

        $query->andFilterWhere(['like', 'project_type', $this->project_type]);

        return $dataProvider;
    }
}
