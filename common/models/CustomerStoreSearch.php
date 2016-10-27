<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CustomerStore;

/**
 * CustomerStoreSearch represents the model behind the search form about `common\models\CustomerStore`.
 */
class CustomerStoreSearch extends CustomerStore
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'customer_id', 'store_id', 'last_staff_id', 'number_visit', 'number_booking', 'tickets_balance', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['total_point', 'total_amount', 'charge_balance'], 'number'],
            [['rank_id', 'last_visit_date', 'first_visit_date', 'news_transmision_flg', 'black_list_flg', 'del_flg'], 'safe'],
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
        $query = CustomerStore::find();

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
            'customer_id' => $this->customer_id,
            'store_id' => $this->store_id,
            'total_point' => $this->total_point,
            'total_amount' => $this->total_amount,
            'last_staff_id' => $this->last_staff_id,
            'number_visit' => $this->number_visit,
            'number_booking' => $this->number_booking,
            'last_visit_date' => $this->last_visit_date,
            'first_visit_date' => $this->first_visit_date,
            'tickets_balance' => $this->tickets_balance,
            'charge_balance' => $this->charge_balance,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'rank_id', $this->rank_id])
            ->andFilterWhere(['like', 'news_transmision_flg', $this->news_transmision_flg])
            ->andFilterWhere(['like', 'black_list_flg', $this->black_list_flg])
            ->andFilterWhere(['like', 'del_flg', $this->del_flg]);

        return $dataProvider;
    }
}
