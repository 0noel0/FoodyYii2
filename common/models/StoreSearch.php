<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Store;

/**
 * StoreSearch represents the model behind the search form about `common\models\Store`.
 */
class StoreSearch extends Store
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reservations_possible_time', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['store_code', 'name', 'post_code', 'address', 'directions', 'latitude', 'longitude', 'website', 'time_open', 'time_close', 'regular_holiday', 'tel', 'introduce', 'image1', 'image2', 'image3', 'image4', 'image5', 'show_flg', 'booking_resources', 'link_title_1', 'link_url_1', 'link_icon_1', 'link_title_2', 'link_url_2', 'link_icon_2', 'link_title_3', 'link_url_3', 'link_icon_3', 'store_item_1_title', 'store_item_1', 'store_item_2_title', 'store_item_2', 'store_item_3_title', 'store_item_3', 'store_item_4_title', 'store_item_4', 'store_item_5_title', 'store_item_5', 'store_item_6_title', 'store_item_6', 'store_item_7_title', 'store_item_7', 'store_item_8_title', 'store_item_8', 'store_item_9_title', 'store_item_9', 'store_item_10_title', 'store_item_10', 'staff_item_1', 'staff_item_2', 'staff_item_3', 'staff_item_4', 'staff_item_5', 'show_in_booking_flg', 'show_in_notice_flg', 'show_in_coupon_flg', 'show_in_product_category_flg', 'show_in_my_page_flg', 'show_in_staff_flg', 'del_flg'], 'safe'],
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
        $query = Store::find();

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
            'reservations_possible_time' => $this->reservations_possible_time,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'store_code', $this->store_code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'post_code', $this->post_code])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'directions', $this->directions])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'time_open', $this->time_open])
            ->andFilterWhere(['like', 'time_close', $this->time_close])
            ->andFilterWhere(['like', 'regular_holiday', $this->regular_holiday])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'introduce', $this->introduce])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'image3', $this->image3])
            ->andFilterWhere(['like', 'image4', $this->image4])
            ->andFilterWhere(['like', 'image5', $this->image5])
            ->andFilterWhere(['like', 'show_flg', $this->show_flg])
            ->andFilterWhere(['like', 'booking_resources', $this->booking_resources])
            ->andFilterWhere(['like', 'link_title_1', $this->link_title_1])
            ->andFilterWhere(['like', 'link_url_1', $this->link_url_1])
            ->andFilterWhere(['like', 'link_icon_1', $this->link_icon_1])
            ->andFilterWhere(['like', 'link_title_2', $this->link_title_2])
            ->andFilterWhere(['like', 'link_url_2', $this->link_url_2])
            ->andFilterWhere(['like', 'link_icon_2', $this->link_icon_2])
            ->andFilterWhere(['like', 'link_title_3', $this->link_title_3])
            ->andFilterWhere(['like', 'link_url_3', $this->link_url_3])
            ->andFilterWhere(['like', 'link_icon_3', $this->link_icon_3])
            ->andFilterWhere(['like', 'store_item_1_title', $this->store_item_1_title])
            ->andFilterWhere(['like', 'store_item_1', $this->store_item_1])
            ->andFilterWhere(['like', 'store_item_2_title', $this->store_item_2_title])
            ->andFilterWhere(['like', 'store_item_2', $this->store_item_2])
            ->andFilterWhere(['like', 'store_item_3_title', $this->store_item_3_title])
            ->andFilterWhere(['like', 'store_item_3', $this->store_item_3])
            ->andFilterWhere(['like', 'store_item_4_title', $this->store_item_4_title])
            ->andFilterWhere(['like', 'store_item_4', $this->store_item_4])
            ->andFilterWhere(['like', 'store_item_5_title', $this->store_item_5_title])
            ->andFilterWhere(['like', 'store_item_5', $this->store_item_5])
            ->andFilterWhere(['like', 'store_item_6_title', $this->store_item_6_title])
            ->andFilterWhere(['like', 'store_item_6', $this->store_item_6])
            ->andFilterWhere(['like', 'store_item_7_title', $this->store_item_7_title])
            ->andFilterWhere(['like', 'store_item_7', $this->store_item_7])
            ->andFilterWhere(['like', 'store_item_8_title', $this->store_item_8_title])
            ->andFilterWhere(['like', 'store_item_8', $this->store_item_8])
            ->andFilterWhere(['like', 'store_item_9_title', $this->store_item_9_title])
            ->andFilterWhere(['like', 'store_item_9', $this->store_item_9])
            ->andFilterWhere(['like', 'store_item_10_title', $this->store_item_10_title])
            ->andFilterWhere(['like', 'store_item_10', $this->store_item_10])
            ->andFilterWhere(['like', 'staff_item_1', $this->staff_item_1])
            ->andFilterWhere(['like', 'staff_item_2', $this->staff_item_2])
            ->andFilterWhere(['like', 'staff_item_3', $this->staff_item_3])
            ->andFilterWhere(['like', 'staff_item_4', $this->staff_item_4])
            ->andFilterWhere(['like', 'staff_item_5', $this->staff_item_5])
            ->andFilterWhere(['like', 'show_in_booking_flg', $this->show_in_booking_flg])
            ->andFilterWhere(['like', 'show_in_notice_flg', $this->show_in_notice_flg])
            ->andFilterWhere(['like', 'show_in_coupon_flg', $this->show_in_coupon_flg])
            ->andFilterWhere(['like', 'show_in_product_category_flg', $this->show_in_product_category_flg])
            ->andFilterWhere(['like', 'show_in_my_page_flg', $this->show_in_my_page_flg])
            ->andFilterWhere(['like', 'show_in_staff_flg', $this->show_in_staff_flg])
            ->andFilterWhere(['like', 'del_flg', $this->del_flg]);

        return $dataProvider;
    }
}
