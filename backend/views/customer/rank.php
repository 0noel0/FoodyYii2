<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */

$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Customers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .store-name{
        border-bottom: 1px dashed black;
    }
    .left{
        float: left;
    }
    .right{
        float: right;
    }
    .customer-view .rank ul{
        list-style: none;
    }
    .customer-view .rank ul li{
        margin-bottom: 10px;
    }
    .customer-view .rank ul img{
        width: 200px;
        height: 80px;
    }
    .customer-view .item-rank .panel-body{
        margin: 20px;
    }
    .my-prev-page{
       
    }
    .pager{
        padding-left: 10%;
        
        
    }
    .pager li >a, .pager li >span{
        border: none;
        border-radius: 2px;
    }
    .my-active-page{
       
    }
    
</style>
<script>

</script>
<div class="customer-view">

    <h1>ランク情報一覧</h1>
    <?php
    // display pagination
echo LinkPager::widget([
    'pagination' => $pages,
    
    'nextPageLabel' => '次へ<span class="glyphicon glyphicon-triangle-right"></span>',
    'prevPageLabel' => '<span class="glyphicon glyphicon-triangle-left"></span>前へ',
    'maxButtonCount' => 1,
    'prevPageCssClass' => 'my-prev-page',
    'nextPageCssClass' => 'my-next-page',
    'activePageCssClass'=> 'my-active-page active',
    'options' => [
        'class' => ' pager',
        'label' => 'cc'
    ]
]);
    ?>
    <div class="rank">
        <ul>
            <?php
                foreach($model->customerStores as $customerStore){
            ?>
            <li >
                <div class="item-rank">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 class="store-name">店舗名: <?= $customerStore->store_name?></h4>
                            <div class="left">
                                <p>ランク :  <?= common\models\Rank::getRankName($customerStore->rank_id)?></p>
                                <img src="http://localhost/yii-application/frontend/web/uploads/no-image.jpg"/>
                            </div>
                            <div class="right">
                                <p>ランクアップ条件ランク名 0/2 達成</p>
                                <a href="info-rank?id=<?= $customerStore->customer_id."&info_id=".$customerStore->store_id?>">詳細を見る</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
