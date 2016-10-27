<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CustomerStoreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Customer Stores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-store-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Customer Store'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_id',
            'store_id',
            'total_point',
            'total_amount',
            // 'rank_id',
            // 'last_staff_id',
            // 'number_visit',
            // 'number_booking',
            // 'last_visit_date',
            // 'first_visit_date',
            // 'tickets_balance',
            // 'charge_balance',
            // 'news_transmision_flg',
            // 'black_list_flg',
            // 'del_flg',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
