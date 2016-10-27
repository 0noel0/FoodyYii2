<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CustomerStore */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-store-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'store_id')->textInput() ?>

    <?= $form->field($model, 'total_point')->textInput() ?>

    <?= $form->field($model, 'total_amount')->textInput() ?>

    <?= $form->field($model, 'rank_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_staff_id')->textInput() ?>

    <?= $form->field($model, 'number_visit')->textInput() ?>

    <?= $form->field($model, 'number_booking')->textInput() ?>

    <?= $form->field($model, 'last_visit_date')->textInput() ?>

    <?= $form->field($model, 'first_visit_date')->textInput() ?>

    <?= $form->field($model, 'tickets_balance')->textInput() ?>

    <?= $form->field($model, 'charge_balance')->textInput() ?>

    <?= $form->field($model, 'news_transmision_flg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'black_list_flg')->textInput(['maxlength' => true]) ?>

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
