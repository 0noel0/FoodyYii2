<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mst_customer".
 *
 * @property integer $id
 * @property string $customer_jan_code
 * @property string $first_name
 * @property string $first_name_kana
 * @property string $last_name
 * @property string $last_name_kana
 * @property string $birth_date
 * @property string $sex
 * @property string $address
 * @property string $address_map
 * @property string $post_code
 * @property string $tel
 * @property string $mobile
 * @property string $email
 * @property string $memo
 * @property string $referral_person
 * @property integer $register_store_id
 * @property integer $register_staff_id
 * @property string $prefecture
 * @property integer $user_id
 * @property string $membership_card_number
 * @property string $del_flg
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property string $address2
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const PAGINATE = 5;
    public static $pages;
    public static function tableName()
    {
        return 'mst_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_jan_code', 'first_name', 'first_name_kana', 'last_name', 'last_name_kana', 'user_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'required'],
            [['birth_date'], 'safe'],
            [['register_store_id', 'register_staff_id', 'user_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['customer_jan_code'], 'string', 'max' => 13],
            [['first_name', 'first_name_kana', 'last_name', 'last_name_kana'], 'string', 'max' => 40],
            [['sex', 'del_flg'], 'string', 'max' => 1],
            [['address', 'address2'], 'string', 'max' => 240],
            [['address_map'], 'string', 'max' => 300],
            [['post_code'], 'string', 'max' => 7],
            [['tel', 'mobile'], 'string', 'max' => 17],
            [['email'], 'string', 'max' => 60],
            [['memo'], 'string', 'max' => 500],
            [['referral_person', 'prefecture'], 'string', 'max' => 80],
            [['membership_card_number'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'customer_jan_code' => Yii::t('app', 'Customer Jan Code'),
            'first_name' => Yii::t('app', 'First Name'),
            'first_name_kana' => Yii::t('app', 'First Name Kana'),
            'last_name' => Yii::t('app', 'Last Name'),
            'last_name_kana' => Yii::t('app', 'Last Name Kana'),
            'birth_date' => Yii::t('app', 'Birth Date'),
            'sex' => Yii::t('app', 'Sex'),
            'address' => Yii::t('app', 'Address'),
            'address_map' => Yii::t('app', 'Address Map'),
            'post_code' => Yii::t('app', 'Post Code'),
            'tel' => Yii::t('app', 'Tel'),
            'mobile' => Yii::t('app', 'Mobile'),
            'email' => Yii::t('app', 'Email'),
            'memo' => Yii::t('app', 'Memo'),
            'referral_person' => Yii::t('app', 'Referral Person'),
            'register_store_id' => Yii::t('app', 'Register Store ID'),
            'register_staff_id' => Yii::t('app', 'Register Staff ID'),
            'prefecture' => Yii::t('app', 'Prefecture'),
            'user_id' => Yii::t('app', 'User ID'),
            'membership_card_number' => Yii::t('app', 'Membership Card Number'),
            'del_flg' => Yii::t('app', 'Del Flg'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
            'address2' => Yii::t('app', 'Address2'),
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerStores()
    {
        $query = $this->hasMany(CustomerStore::className(), ['customer_id' => 'id']);
        $countQuery = clone $query;
        self::$pages = new \yii\data\Pagination(['totalCount' => $countQuery->count()]);
        self::$pages->setPageSize(self::PAGINATE);
        $models = $query->offset(self::$pages->offset)
            ->limit(self::$pages->limit);
        return $models;
        //return $this->hasMany(CustomerStore::className(), ['customer_id' => 'id']);
    }
    public static function getStores($info_id)
    {
//        $model= $this->hasMany(CustomerStore::className(), ['customer_id' => 'id'])->where(['customer_store.store_id'=>$info_id]);
//        var_dump($model);
//        die(1);
    }
//    public function getStores() {
//        return $this->hasMany(Store::className(), ['id' => 'store_id'])
//          ->viaTable(CustomerStore::tableName(), ['customer_id' => 'id']);
//    }
    
}
