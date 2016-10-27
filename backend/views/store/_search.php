<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StoreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'store_code') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'post_code') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'directions') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'time_open') ?>

    <?php // echo $form->field($model, 'time_close') ?>

    <?php // echo $form->field($model, 'regular_holiday') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'introduce') ?>

    <?php // echo $form->field($model, 'image1') ?>

    <?php // echo $form->field($model, 'image2') ?>

    <?php // echo $form->field($model, 'image3') ?>

    <?php // echo $form->field($model, 'image4') ?>

    <?php // echo $form->field($model, 'image5') ?>

    <?php // echo $form->field($model, 'show_flg') ?>

    <?php // echo $form->field($model, 'reservations_possible_time') ?>

    <?php // echo $form->field($model, 'booking_resources') ?>

    <?php // echo $form->field($model, 'link_title_1') ?>

    <?php // echo $form->field($model, 'link_url_1') ?>

    <?php // echo $form->field($model, 'link_icon_1') ?>

    <?php // echo $form->field($model, 'link_title_2') ?>

    <?php // echo $form->field($model, 'link_url_2') ?>

    <?php // echo $form->field($model, 'link_icon_2') ?>

    <?php // echo $form->field($model, 'link_title_3') ?>

    <?php // echo $form->field($model, 'link_url_3') ?>

    <?php // echo $form->field($model, 'link_icon_3') ?>

    <?php // echo $form->field($model, 'store_item_1_title') ?>

    <?php // echo $form->field($model, 'store_item_1') ?>

    <?php // echo $form->field($model, 'store_item_2_title') ?>

    <?php // echo $form->field($model, 'store_item_2') ?>

    <?php // echo $form->field($model, 'store_item_3_title') ?>

    <?php // echo $form->field($model, 'store_item_3') ?>

    <?php // echo $form->field($model, 'store_item_4_title') ?>

    <?php // echo $form->field($model, 'store_item_4') ?>

    <?php // echo $form->field($model, 'store_item_5_title') ?>

    <?php // echo $form->field($model, 'store_item_5') ?>

    <?php // echo $form->field($model, 'store_item_6_title') ?>

    <?php // echo $form->field($model, 'store_item_6') ?>

    <?php // echo $form->field($model, 'store_item_7_title') ?>

    <?php // echo $form->field($model, 'store_item_7') ?>

    <?php // echo $form->field($model, 'store_item_8_title') ?>

    <?php // echo $form->field($model, 'store_item_8') ?>

    <?php // echo $form->field($model, 'store_item_9_title') ?>

    <?php // echo $form->field($model, 'store_item_9') ?>

    <?php // echo $form->field($model, 'store_item_10_title') ?>

    <?php // echo $form->field($model, 'store_item_10') ?>

    <?php // echo $form->field($model, 'staff_item_1') ?>

    <?php // echo $form->field($model, 'staff_item_2') ?>

    <?php // echo $form->field($model, 'staff_item_3') ?>

    <?php // echo $form->field($model, 'staff_item_4') ?>

    <?php // echo $form->field($model, 'staff_item_5') ?>

    <?php // echo $form->field($model, 'show_in_booking_flg') ?>

    <?php // echo $form->field($model, 'show_in_notice_flg') ?>

    <?php // echo $form->field($model, 'show_in_coupon_flg') ?>

    <?php // echo $form->field($model, 'show_in_product_category_flg') ?>

    <?php // echo $form->field($model, 'show_in_my_page_flg') ?>

    <?php // echo $form->field($model, 'show_in_staff_flg') ?>

    <?php // echo $form->field($model, 'del_flg') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
