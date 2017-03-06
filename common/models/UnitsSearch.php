<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Units;

/**
 * UnitsSearch represents the model behind the search form about `common\models\Units`.
 */
class UnitsSearch extends Units
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'floor', 'status', 'created_by', 'is_sold'], 'integer'],
            [['unit_no', 'unit_type', 'category', 'unit_map', 'last_update', 'timestamp', 'updated_by', 'comments','size','no_beds'], 'safe'],
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
       // var_dump([$params]);exit;
        $query = Units::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        //var_dump($this->unit_no);exit;
        $query->andFilterWhere([
            'id' => $this->id,
            'floor' => $this->floor,
            'status' => $this->status,
           // 'unit_no'=> $this->unit_no,
           // 'unit_type'=> $this->unit_type,
           // 'last_update' => $this->last_update,
            'timestamp' => $this->timestamp,
            //'created_by' => $this->created_by,
            'is_sold' => $this->is_sold,
        ]);
   

        $query->andFilterWhere(['like', 'unit_no', $this->unit_no])
            ->andFilterWhere(['like', 'unit_type', $this->unit_type])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'no_beds', $this->no_beds])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'unit_map', $this->unit_map])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by])
            ->andFilterWhere(['like', 'comments', $this->comments]);
       // var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        return $dataProvider;
    }
}
