<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberAppartments;

/**
 * MemberAppartmentsSearch represents the model behind the search form about `common\models\MemberAppartments`.
 */
class MemberAppartmentsSearch extends MemberAppartments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'member_id', 'accountant_id'], 'integer'],
            [['unit_no', 'block', 'type', 'floor', 'prize', 'apartment_document', 'last_update', 'timestamp'], 'safe'],
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
        $query = MemberAppartments::find();
        if(Yii::$app->user->can('user') && !Yii::$app->user->can('manager') && !Yii::$app->user->can('administrator')){
            $query->andWhere("member_id=".Yii::$app->user->ID);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'member_id' => $this->member_id,
            'accountant_id' => $this->accountant_id,
            'last_update' => $this->last_update,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'unit_no', $this->unit_no])
            ->andFilterWhere(['like', 'block', $this->block])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'floor', $this->floor])
            ->andFilterWhere(['like', 'prize', $this->prize])
            ->andFilterWhere(['like', 'apartment_document', $this->apartment_document]);

        return $dataProvider;
    }
}
