<?php

namespace backend\models\search;

use common\models\TimelineEvent;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * TimelineEventSearch represents the model behind the search form about `common\models\TimelineEvent`.
 */
class TimelineEventSearch extends TimelineEvent {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['application', 'category', 'event', 'created_at', 'user_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = \common\models\MemberPlots::find();
            $query->andFilterWhere([
                'date'=> Date('Y-m-d')
            ]);
            
//            var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        if (!($this->load($params) && $this->validate())) {
            
            return $dataProvider;
        }
//var_dump($dataProvider);exit;
        //$query->andWhere('user_id='.Yii::$app->user->ID);

//
//        $query->andFilterWhere([
//            'id' => $this->id,
//            'created_at' => $this->created_at,
//        ]);
//
//        $query->andFilterWhere(['like', 'application', $this->application]);
//        $query->andFilterWhere(['like', 'category', $this->category]);
//        $query->andFilterWhere(['like', 'event', $this->event]);

        return $dataProvider;
    }

}
