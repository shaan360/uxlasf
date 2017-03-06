<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Members;

/**
 * MembersPlanSearch represents the model behind the search form about `common\models\Members`.
 */
class MembersPlanSearch extends Members
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['membership_number', 'application_document', 'form_number', 'first_name', 'last_name', 'full_name', 'photo', 'father_husband_name', 'postal_address', 'residential_address', 'phone_office', 'phone_residential', 'mobile', 'email', 'occupation', 'nationality', 'dob', 'cnic', 'member_cnic', 'name_of_nominee', 'relation', 'address_of_nominee', 'nominee_cnic', 'nominee_cnic_scan', 'application_date', 'password', 'remarks', 'active_key', 'is_blocked', 'last_login', 'last_modified', 'timestamp'], 'safe'],
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
        $query = Members::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'application_date' => $this->application_date,
            'status' => $this->status,
            'last_login' => $this->last_login,
            'last_modified' => $this->last_modified,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'membership_number', $this->membership_number])
            ->andFilterWhere(['like', 'application_document', $this->application_document])
            ->andFilterWhere(['like', 'form_number', $this->form_number])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'father_husband_name', $this->father_husband_name])
            ->andFilterWhere(['like', 'postal_address', $this->postal_address])
            ->andFilterWhere(['like', 'residential_address', $this->residential_address])
            ->andFilterWhere(['like', 'phone_office', $this->phone_office])
            ->andFilterWhere(['like', 'phone_residential', $this->phone_residential])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'cnic', $this->cnic])
            ->andFilterWhere(['like', 'member_cnic', $this->member_cnic])
            ->andFilterWhere(['like', 'name_of_nominee', $this->name_of_nominee])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'address_of_nominee', $this->address_of_nominee])
            ->andFilterWhere(['like', 'nominee_cnic', $this->nominee_cnic])
            ->andFilterWhere(['like', 'nominee_cnic_scan', $this->nominee_cnic_scan])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'active_key', $this->active_key])
            ->andFilterWhere(['like', 'is_blocked', $this->is_blocked]);

        return $dataProvider;
    }
}
