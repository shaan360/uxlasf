<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberShopLedger;

/**
 * MemberShopLedgerSearch represents the model behind the search form about `common\models\MemberShopLedger`.
 */
class MemberShopLedgerSearch extends MemberShopLedger
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'accountant_id', 'member_id', 'shop_id'], 'integer'],
            [['date_as_on', 'particulars', 'society_receipt', 'payable_outstanding', 'payment_received', 'balance_outstanding', 'remarks', 'last_modified', 'timestamp'], 'safe'],
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
        $query = MemberShopLedger::find();

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
            'shop_id' => $this->shop_id,
            'last_modified' => $this->last_modified,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'date_as_on', $this->date_as_on])
            ->andFilterWhere(['like', 'particulars', $this->particulars])
            ->andFilterWhere(['like', 'society_receipt', $this->society_receipt])
            ->andFilterWhere(['like', 'payable_outstanding', $this->payable_outstanding])
            ->andFilterWhere(['like', 'payment_received', $this->payment_received])
            ->andFilterWhere(['like', 'balance_outstanding', $this->balance_outstanding])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
