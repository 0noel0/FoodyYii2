<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerStoreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-store-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'store_id') ?>

    <?= $form->field($model, 'total_point') ?>

    <?= $form->field($model, 'total_amount') ?>

    <?php // echo $form->field($model, 'rank_id') ?>

    <?php // echo $form->field($model, 'last_staff_id') ?>

    <?php // echo $form->field($model, 'number_visit') ?>

    <?php // echo $form->field($model, 'number_booking') ?>

    <?php // echo $form->field($model, 'last_visit_date') ?>

    <?php // echo $form->field($model, 'first_visit_date') ?>

    <?php // echo $form->field($model, 'tickets_balance') ?>

    <?php // echo $form->field($model, 'charge_balance') ?>

    <?php // echo $form->field($model, 'news_transmision_flg') ?>

    <?php // echo $form->field($model, 'black_list_flg') ?>

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
