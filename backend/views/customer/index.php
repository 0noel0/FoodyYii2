<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_jan_code',
            'first_name',
            'first_name_kana',
            'last_name',
            // 'last_name_kana',
            // 'birth_date',
            // 'sex',
            // 'address',
            // 'address_map',
            // 'post_code',
            // 'tel',
            // 'mobile',
            // 'email:email',
            // 'memo',
            // 'referral_person',
            // 'register_store_id',
            // 'register_staff_id',
            // 'prefecture',
            // 'user_id',
            // 'membership_card_number',
            // 'del_flg',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',
            // 'address2',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{info}',
                'buttons' => [
                    'info' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-info-sign"></span>', $url, [
                                    'title' => Yii::t('app', 'Info'),
                        ]);
                    }
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'info') {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                }
            ]
        ],
    ]); ?>
</div>
