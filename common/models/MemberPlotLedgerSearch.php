<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberPlotLedger;

/**
 * MemberPlotLedgerSearch represents the model behind the search form about `common\models\MemberPlotLedger`.
 */
class MemberPlotLedgerSearch extends MemberPlotLedger
{
    public $name;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'accountant_id','member_id', 'unit_id'], 'integer'],
            [['date_as_on','name', 'particulars', 'society_receipt', 'payable_outstanding', 'payment_received', 'balance_outstanding', 'remarks', 'last_modified', 'timestamp'], 'safe'],
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
    public function customsearch($id){
        
       $query= MemberPlotLedger::find()->where('unit_id !='.$id);
       echo'<pre>';print_r($query);
       return $query;
    }
    public function search($params)
    {
        $query = MemberPlotLedger::find();
        $query->joinWith('member');
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        $parameters = Yii::$app->request->get('MemberPlotLedgerSearch');
        if(isset($parameters['name'])){
            $name = $parameters['name'];
        }
       
        $date = Yii::$app->request->get('date');
       
//         var_dump($name);
      //  exit();
        $query->andFilterWhere([
            'id' => $this->id,
            'accountant_id' => $this->accountant_id,
            //'members.full_name' => $name,
            'unit_id' => $this->unit_id,
            //'member_plot_ledger.last_modified' => $this->last_modified,
            'timestamp' => $this->timestamp,
        ]);
        if(!empty($name))
            $query->andFilterWhere(['like', 'members.full_name', $name]);
        if(!empty($date))
        $query->andFilterWhere(['like', 'date_as_on', $date]);
                $query->andFilterWhere(['like', 'particulars', $this->particulars])
            ->andFilterWhere(['like', 'society_receipt', $this->society_receipt])
            ->andFilterWhere(['like', 'payable_outstanding', $this->payable_outstanding])
            ->andFilterWhere(['like', 'payment_received', $this->payment_received])
            ->andFilterWhere(['like', 'balance_outstanding', $this->balance_outstanding])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
