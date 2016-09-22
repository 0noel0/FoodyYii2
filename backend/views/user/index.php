<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\User;
use kartik\export\ExportMenu;
use yii\helpers\VarDumper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            [
                'attribute' => 'role',
                'content' => function ($model) {
                    return $model->getRoleName();
                }
            ],
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    return $model->getStatusName();
                }
            ],
            'created_at',
            'updated_at'
        ],
    ]);
    ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            [
                'attribute' => 'role',
                'content' => function($data) {
                    return $data->getRoleName();
                },
                'filter' => User::getListRole(),
            ],
            [
                'attribute' => 'status',
                'contentOptions' => ['class' => ''],
                'content' => function($data) {
            return $data->getStatusName();
        },
                'filter' => User::getListStatus(),
            ],
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
                'filter' => '',
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
                'filter' => '',
            ],
//            'deleted_at',
//            'is_deleted',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                        return $model->id === Yii::$app->user->id ? '' : Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                    'title' => \Yii::t('yii', 'Delete'),
                                    'data-confirm' => \Yii::t('yii', 'Are you sure to delete this item?'),
                                    'data-method' => 'post',
                                    'data-pjax' => '0',
                        ]);
                    },
                        ]
                    ],
                ],
            ]);
            ?>
</div>
