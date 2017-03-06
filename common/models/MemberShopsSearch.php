<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberShops;

/**
 * MemberShopsSearch represents the model behind the search form about `common\models\MemberShops`.
 */
class MemberShopsSearch extends MemberShops
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'accountant_id', 'member_id', 'payment_mode', 'status'], 'integer'],
            [['shop_no', 'category', 'shop_size', 'shop_prize', 'shop_document', 'last_update', 'timestamp'], 'safe'],
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
        $query = MemberShops::find();
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
            'accountant_id' => $this->accountant_id,
            'member_id' => $this->member_id,
            'payment_mode' => $this->payment_mode,
            'status' => $this->status,
            'last_update' => $this->last_update,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'shop_no', $this->shop_no])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'shop_size', $this->shop_size])
            ->andFilterWhere(['like', 'shop_prize', $this->shop_prize])
            ->andFilterWhere(['like', 'shop_document', $this->shop_document]);

        return $dataProvider;
    }
}
