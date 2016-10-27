<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mst_store".
 *
 * @property integer $id
 * @property string $store_code
 * @property string $name
 * @property string $post_code
 * @property string $address
 * @property string $directions
 * @property string $latitude
 * @property string $longitude
 * @property string $website
 * @property string $time_open
 * @property string $time_close
 * @property string $regular_holiday
 * @property string $tel
 * @property string $introduce
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property string $image5
 * @property string $show_flg
 * @property integer $reservations_possible_time
 * @property string $booking_resources
 * @property string $link_title_1
 * @property string $link_url_1
 * @property string $link_icon_1
 * @property string $link_title_2
 * @property string $link_url_2
 * @property string $link_icon_2
 * @property string $link_title_3
 * @property string $link_url_3
 * @property string $link_icon_3
 * @property string $store_item_1_title
 * @property string $store_item_1
 * @property string $store_item_2_title
 * @property string $store_item_2
 * @property string $store_item_3_title
 * @property string $store_item_3
 * @property string $store_item_4_title
 * @property string $store_item_4
 * @property string $store_item_5_title
 * @property string $store_item_5
 * @property string $store_item_6_title
 * @property string $store_item_6
 * @property string $store_item_7_title
 * @property string $store_item_7
 * @property string $store_item_8_title
 * @property string $store_item_8
 * @property string $store_item_9_title
 * @property string $store_item_9
 * @property string $store_item_10_title
 * @property string $store_item_10
 * @property string $staff_item_1
 * @property string $staff_item_2
 * @property string $staff_item_3
 * @property string $staff_item_4
 * @property string $staff_item_5
 * @property string $show_in_booking_flg
 * @property string $show_in_notice_flg
 * @property string $show_in_coupon_flg
 * @property string $show_in_product_category_flg
 * @property string $show_in_my_page_flg
 * @property string $show_in_staff_flg
 * @property string $del_flg
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mst_store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_code', 'name', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['reservations_possible_time', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['store_code', 'time_open', 'time_close'], 'string', 'max' => 5],
            [['name', 'regular_holiday', 'image1', 'image2', 'image3', 'image4', 'image5', 'link_title_1', 'link_icon_1', 'link_title_2', 'link_icon_2', 'link_title_3', 'link_icon_3', 'store_item_1', 'store_item_2', 'store_item_3', 'store_item_4', 'store_item_5', 'store_item_6', 'store_item_7', 'store_item_8', 'store_item_9', 'store_item_10', 'staff_item_1', 'staff_item_2', 'staff_item_3', 'staff_item_4', 'staff_item_5'], 'string', 'max' => 100],
            [['post_code'], 'string', 'max' => 7],
            [['address'], 'string', 'max' => 240],
            [['directions', 'introduce'], 'string', 'max' => 500],
            [['latitude', 'longitude'], 'string', 'max' => 30],
            [['website', 'link_url_1', 'link_url_2', 'link_url_3'], 'string', 'max' => 300],
            [['tel'], 'string', 'max' => 17],
            [['show_flg', 'show_in_booking_flg', 'show_in_notice_flg', 'show_in_coupon_flg', 'show_in_product_category_flg', 'show_in_my_page_flg', 'show_in_staff_flg', 'del_flg'], 'string', 'max' => 1],
            [['booking_resources'], 'string', 'max' => 2],
            [['store_item_1_title', 'store_item_2_title', 'store_item_3_title', 'store_item_4_title', 'store_item_5_title', 'store_item_6_title', 'store_item_7_title', 'store_item_8_title', 'store_item_9_title', 'store_item_10_title'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'store_code' => Yii::t('app', 'Store Code'),
            'name' => Yii::t('app', 'Name'),
            'post_code' => Yii::t('app', 'Post Code'),
            'address' => Yii::t('app', 'Address'),
            'directions' => Yii::t('app', 'Directions'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'website' => Yii::t('app', 'Website'),
            'time_open' => Yii::t('app', 'Time Open'),
            'time_close' => Yii::t('app', 'Time Close'),
            'regular_holiday' => Yii::t('app', 'Regular Holiday'),
            'tel' => Yii::t('app', 'Tel'),
            'introduce' => Yii::t('app', 'Introduce'),
            'image1' => Yii::t('app', 'Image1'),
            'image2' => Yii::t('app', 'Image2'),
            'image3' => Yii::t('app', 'Image3'),
            'image4' => Yii::t('app', 'Image4'),
            'image5' => Yii::t('app', 'Image5'),
            'show_flg' => Yii::t('app', 'Show Flg'),
            'reservations_possible_time' => Yii::t('app', 'Reservations Possible Time'),
            'booking_resources' => Yii::t('app', 'Booking Resources'),
            'link_title_1' => Yii::t('app', 'Link Title 1'),
            'link_url_1' => Yii::t('app', 'Link Url 1'),
            'link_icon_1' => Yii::t('app', 'Link Icon 1'),
            'link_title_2' => Yii::t('app', 'Link Title 2'),
            'link_url_2' => Yii::t('app', 'Link Url 2'),
            'link_icon_2' => Yii::t('app', 'Link Icon 2'),
            'link_title_3' => Yii::t('app', 'Link Title 3'),
            'link_url_3' => Yii::t('app', 'Link Url 3'),
            'link_icon_3' => Yii::t('app', 'Link Icon 3'),
            'store_item_1_title' => Yii::t('app', 'Store Item 1 Title'),
            'store_item_1' => Yii::t('app', 'Store Item 1'),
            'store_item_2_title' => Yii::t('app', 'Store Item 2 Title'),
            'store_item_2' => Yii::t('app', 'Store Item 2'),
            'store_item_3_title' => Yii::t('app', 'Store Item 3 Title'),
            'store_item_3' => Yii::t('app', 'Store Item 3'),
            'store_item_4_title' => Yii::t('app', 'Store Item 4 Title'),
            'store_item_4' => Yii::t('app', 'Store Item 4'),
            'store_item_5_title' => Yii::t('app', 'Store Item 5 Title'),
            'store_item_5' => Yii::t('app', 'Store Item 5'),
            'store_item_6_title' => Yii::t('app', 'Store Item 6 Title'),
            'store_item_6' => Yii::t('app', 'Store Item 6'),
            'store_item_7_title' => Yii::t('app', 'Store Item 7 Title'),
            'store_item_7' => Yii::t('app', 'Store Item 7'),
            'store_item_8_title' => Yii::t('app', 'Store Item 8 Title'),
            'store_item_8' => Yii::t('app', 'Store Item 8'),
            'store_item_9_title' => Yii::t('app', 'Store Item 9 Title'),
            'store_item_9' => Yii::t('app', 'Store Item 9'),
            'store_item_10_title' => Yii::t('app', 'Store Item 10 Title'),
            'store_item_10' => Yii::t('app', 'Store Item 10'),
            'staff_item_1' => Yii::t('app', 'Staff Item 1'),
            'staff_item_2' => Yii::t('app', 'Staff Item 2'),
            'staff_item_3' => Yii::t('app', 'Staff Item 3'),
            'staff_item_4' => Yii::t('app', 'Staff Item 4'),
            'staff_item_5' => Yii::t('app', 'Staff Item 5'),
            'show_in_booking_flg' => Yii::t('app', 'Show In Booking Flg'),
            'show_in_notice_flg' => Yii::t('app', 'Show In Notice Flg'),
            'show_in_coupon_flg' => Yii::t('app', 'Show In Coupon Flg'),
            'show_in_product_category_flg' => Yii::t('app', 'Show In Product Category Flg'),
            'show_in_my_page_flg' => Yii::t('app', 'Show In My Page Flg'),
            'show_in_staff_flg' => Yii::t('app', 'Show In Staff Flg'),
            'del_flg' => Yii::t('app', 'Del Flg'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
     /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerStores()
    {
        return $this->hasMany(CustomerStore::className(), ['store_id' => 'id']);
    }
    public function getCustomers() {
        return $this->hasMany(Customer::className(), ['id' => 'customer_id'])
          ->viaTable('customer_store', ['store_id' => 'id']);
    }
}
