<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Customer;

/**
 * CustomerSearch represents the model behind the search form about `common\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'register_store_id', 'register_staff_id', 'user_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['customer_jan_code', 'first_name', 'first_name_kana', 'last_name', 'last_name_kana', 'birth_date', 'sex', 'address', 'address_map', 'post_code', 'tel', 'mobile', 'email', 'memo', 'referral_person', 'prefecture', 'membership_card_number', 'del_flg', 'address2'], 'safe'],
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
        $query = Customer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'birth_date' => $this->birth_date,
            'register_store_id' => $this->register_store_id,
            'register_staff_id' => $this->register_staff_id,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'customer_jan_code', $this->customer_jan_code])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'first_name_kana', $this->first_name_kana])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'last_name_kana', $this->last_name_kana])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'address_map', $this->address_map])
            ->andFilterWhere(['like', 'post_code', $this->post_code])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'memo', $this->memo])
            ->andFilterWhere(['like', 'referral_person', $this->referral_person])
            ->andFilterWhere(['like', 'prefecture', $this->prefecture])
            ->andFilterWhere(['like', 'membership_card_number', $this->membership_card_number])
            ->andFilterWhere(['like', 'del_flg', $this->del_flg])
            ->andFilterWhere(['like', 'address2', $this->address2]);

        return $dataProvider;
    }
}
