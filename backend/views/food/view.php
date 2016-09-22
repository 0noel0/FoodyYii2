<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\Util;
/* @var $this yii\web\View */
/* @var $model common\models\Food */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-view">

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
            [
                'attribute' => 'category_id',
                'value' => $model->category->name,
            ],
            [
                'attribute' => 'user_id',
                'value' => $model->user->username,
            ],
            'name',
            [
                'attribute'=>'image',
                'value'=>  Util::getUrlImage($model->image),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'content:html',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
