<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AsfSurvivorDetail;

/**
 * AsfSurvivorDetailSearch represents the model behind the search form about `common\models\AsfSurvivorDetail`.
 */
class AsfSurvivorDetailSearch extends AsfSurvivorDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'father_age', 'mother_age', 'brother_number', 'sister_number', 'position_brother', 'house_room', 'children_number', 'spouse_children_number', 'house_room_number', 'family_member_in_house'], 'integer'],
            [['survivor_id', 'victim_perpetrator_link', 'victim_perpetrator_type', 'birth_place', 'patient_profession', 'religion', 'father_profession', 'father_address', 'father_city', 'province', 'telephone_number', 'mother_name', 'mother_victim', 'multiple_mother_number', 'rent_owned', 'house_structure', 'family_earning', 'marital_status', 'spouse_name', 'spouse_profession', 'spouse_address', 'spouse_city', 'spouse_number', 'patient_number_husband_multiple_marriage', 'family_joint_earning', 'bread_line', 'boys_number', 'boys_age', 'girls_number', 'girls_age', 'comments_remarks'], 'safe'],
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
        $query = AsfSurvivorDetail::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'father_age' => $this->father_age,
            'mother_age' => $this->mother_age,
            'brother_number' => $this->brother_number,
            'sister_number' => $this->sister_number,
            'position_brother' => $this->position_brother,
            'house_room' => $this->house_room,
            'children_number' => $this->children_number,
            'spouse_children_number' => $this->spouse_children_number,
            'house_room_number' => $this->house_room_number,
            'family_member_in_house' => $this->family_member_in_house,
        ]);

        $query->andFilterWhere(['like', 'survivor_id', $this->survivor_id])
            ->andFilterWhere(['like', 'victim_perpetrator_link', $this->victim_perpetrator_link])
            ->andFilterWhere(['like', 'victim_perpetrator_type', $this->victim_perpetrator_type])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'patient_profession', $this->patient_profession])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'father_profession', $this->father_profession])
            ->andFilterWhere(['like', 'father_address', $this->father_address])
            ->andFilterWhere(['like', 'father_city', $this->father_city])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'telephone_number', $this->telephone_number])
            ->andFilterWhere(['like', 'mother_name', $this->mother_name])
            ->andFilterWhere(['like', 'mother_victim', $this->mother_victim])
            ->andFilterWhere(['like', 'multiple_mother_number', $this->multiple_mother_number])
            ->andFilterWhere(['like', 'rent_owned', $this->rent_owned])
            ->andFilterWhere(['like', 'house_structure', $this->house_structure])
            ->andFilterWhere(['like', 'family_earning', $this->family_earning])
            ->andFilterWhere(['like', 'marital_status', $this->marital_status])
            ->andFilterWhere(['like', 'spouse_name', $this->spouse_name])
            ->andFilterWhere(['like', 'spouse_profession', $this->spouse_profession])
            ->andFilterWhere(['like', 'spouse_address', $this->spouse_address])
            ->andFilterWhere(['like', 'spouse_city', $this->spouse_city])
            ->andFilterWhere(['like', 'spouse_number', $this->spouse_number])
            ->andFilterWhere(['like', 'patient_number_husband_multiple_marriage', $this->patient_number_husband_multiple_marriage])
            ->andFilterWhere(['like', 'family_joint_earning', $this->family_joint_earning])
            ->andFilterWhere(['like', 'bread_line', $this->bread_line])
            ->andFilterWhere(['like', 'boys_number', $this->boys_number])
            ->andFilterWhere(['like', 'boys_age', $this->boys_age])
            ->andFilterWhere(['like', 'girls_number', $this->girls_number])
            ->andFilterWhere(['like', 'girls_age', $this->girls_age])
            ->andFilterWhere(['like', 'comments_remarks', $this->comments_remarks]);

        return $dataProvider;
    }
}
