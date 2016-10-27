<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'customer_jan_code',
            'first_name',
            'first_name_kana',
            'last_name',
            'last_name_kana',
            'birth_date',
            'sex',
            'address',
            'address_map',
            'post_code',
            'tel',
            'mobile',
            'email:email',
            'memo',
            'referral_person',
            'register_store_id',
            'register_staff_id',
            'prefecture',
            'user_id',
            'membership_card_number',
            'del_flg',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
            'address2',
        ],
    ]) ?>

</div>
