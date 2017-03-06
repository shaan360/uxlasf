<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MemberPlots;

/**
 * MemberPlotsSearch represents the model behind the search form about `common\models\MemberPlots`.
 */
class MemberPlotsSearch extends MemberPlots
{
    public $name;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','unit_id','member_id', 'payment_mode', 'status'], 'integer'],
            [['name','plot_prize','date' ,'plot_document', 'last_update', 'timestamp'], 'safe'],
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
        $query = MemberPlots::find();
         $query->joinWith('member');
       // var_dump($_POST);
        //exit();
        if(Yii::$app->user->can('user') && !Yii::$app->user->can('manager') && !Yii::$app->user->can('administrator')){
            $query->andWhere("member_id=".Yii::$app->user->ID);
            //$query->andWhere(['status' => 1]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        $parameters = Yii::$app->request->get('MemberPlotsSearch');
        if(isset($parameters['name'])){
            $name = $parameters['name'];
        }
       $date= Yii::$app->request->get('date');
       //$date= Yii::$app->request->get('name');
       //var_dump($name);exit;
        $query->andFilterWhere([
            'id' => $this->id,
           // 'accountant_id' => $this->accountant_id,
            'member_id' => $this->member_id,
           // 'members.full_name' => $name,
            //'payment_mode' => $this->payment_mode,
            //'date'=>$date,
            //'status' => $this->status,
            //'last_update' => $this->last_update,
            'timestamp' => $this->timestamp,
        ]);
        if(!empty($name))
        $query->andWhere(['like', 'members.full_name',$name]);
        if(!empty($date))
        $query->andWhere(['like', 'date',$date]);
   
        $query->andFilterWhere(['like', 'plot_prize', $this->plot_prize])
            ->andFilterWhere(['like', 'plot_document', $this->plot_document]);
  //   var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        return $dataProvider;
    }
    public function getdailysales($params){
        
        $query = \common\models\MemberPlots::find();
            $query->andFilterWhere([
                'date'=> Date('Y-m-d')
            ]);
            
  //          var_dump($query->prepare(Yii::$app->db->queryBuilder)->createCommand()->rawSql);
//exit();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

//        echo'<pre>';
//        print_r($dataProvider);exit;
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
