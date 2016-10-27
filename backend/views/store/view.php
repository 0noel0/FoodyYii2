<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Store */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'store_code',
            'name',
            'post_code',
            'address',
            'directions',
            'latitude',
            'longitude',
            'website',
            'time_open',
            'time_close',
            'regular_holiday',
            'tel',
            'introduce',
            'image1',
            'image2',
            'image3',
            'image4',
            'image5',
            'show_flg',
            'reservations_possible_time:datetime',
            'booking_resources',
            'link_title_1',
            'link_url_1:url',
            'link_icon_1',
            'link_title_2',
            'link_url_2:url',
            'link_icon_2',
            'link_title_3',
            'link_url_3:url',
            'link_icon_3',
            'store_item_1_title',
            'store_item_1',
            'store_item_2_title',
            'store_item_2',
            'store_item_3_title',
            'store_item_3',
            'store_item_4_title',
            'store_item_4',
            'store_item_5_title',
            'store_item_5',
            'store_item_6_title',
            'store_item_6',
            'store_item_7_title',
            'store_item_7',
            'store_item_8_title',
            'store_item_8',
            'store_item_9_title',
            'store_item_9',
            'store_item_10_title',
            'store_item_10',
            'staff_item_1',
            'staff_item_2',
            'staff_item_3',
            'staff_item_4',
            'staff_item_5',
            'show_in_booking_flg',
            'show_in_notice_flg',
            'show_in_coupon_flg',
            'show_in_product_category_flg',
            'show_in_my_page_flg',
            'show_in_staff_flg',
            'del_flg',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
