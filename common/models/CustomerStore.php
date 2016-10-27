<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer_store".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $store_id
 * @property string $total_point
 * @property string $total_amount
 * @property string $rank_id
 * @property integer $last_staff_id
 * @property integer $number_visit
 * @property integer $number_booking
 * @property string $last_visit_date
 * @property string $first_visit_date
 * @property integer $tickets_balance
 * @property string $charge_balance
 * @property string $news_transmision_flg
 * @property string $black_list_flg
 * @property string $del_flg
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 */
class CustomerStore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $store_name;
    public $rank_name;
    public static function tableName()
    {
        return 'customer_store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['customer_id', 'store_id', 'last_staff_id', 'number_visit', 'number_booking', 'tickets_balance', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['total_point', 'total_amount', 'charge_balance'], 'number'],
            [['last_visit_date', 'first_visit_date'], 'safe'],
            [['rank_id'], 'string', 'max' => 2],
            [['news_transmision_flg', 'black_list_flg', 'del_flg'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'customer_id' => Yii::t('app', 'Customer ID'),
            'store_id' => Yii::t('app', 'Store ID'),
            'total_point' => Yii::t('app', 'Total Point'),
            'total_amount' => Yii::t('app', 'Total Amount'),
            'rank_id' => Yii::t('app', 'Rank ID'),
            'last_staff_id' => Yii::t('app', 'Last Staff ID'),
            'number_visit' => Yii::t('app', 'Number Visit'),
            'number_booking' => Yii::t('app', 'Number Booking'),
            'last_visit_date' => Yii::t('app', 'Last Visit Date'),
            'first_visit_date' => Yii::t('app', 'First Visit Date'),
            'tickets_balance' => Yii::t('app', 'Tickets Balance'),
            'charge_balance' => Yii::t('app', 'Charge Balance'),
            'news_transmision_flg' => Yii::t('app', 'News Transmision Flg'),
            'black_list_flg' => Yii::t('app', 'Black List Flg'),
            'del_flg' => Yii::t('app', 'Del Flg'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
