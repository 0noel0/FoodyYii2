<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Category;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FoodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Foods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Food'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
        ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns'=> [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                [
                    'attribute' => 'category_id',
                    'value' => function ($model){
                        return $model->category->name;
                    },
                ],
                [
                    'attribute' => 'user_id',
                    'value' => function($model){
                        return $model->user->username;
                    },
                ],
                'created_at',
                'updated_at',
            ]
        ]);
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            [
                'attribute' => 'category_id',
                'filter' => Category::listCategory(),
                'value' => function ($model) {
                    return $model->category->name;
                },
            ],
            [
                'attribute' => 'user_id',
                'value' => function ($model) {
                    return $model->user->username;
                },
            ],
            // 'content:ntext',
            [
                'attribute' => 'created_at',
                'filter' => false,
            ],
            [
                'attribute' => 'updated_at',
                'filter' => false,
            ],
            // 'deleted_at',
            // 'is_deleted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
