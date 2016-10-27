<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Store */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="store-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'store_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'directions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_open')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time_close')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regular_holiday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'introduce')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reservations_possible_time')->textInput() ?>

    <?= $form->field($model, 'booking_resources')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_title_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_icon_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_title_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_icon_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_title_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_url_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_icon_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_1_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_2_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_3_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_4_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_5_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_6_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_7_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_8_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_8')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_9_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_9')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_10_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'store_item_10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_item_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_item_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_item_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_item_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff_item_5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_in_booking_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_in_notice_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_in_coupon_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_in_product_category_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_in_my_page_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_in_staff_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'del_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
