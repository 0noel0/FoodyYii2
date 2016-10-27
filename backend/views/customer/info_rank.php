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
    <div class="rank">
        <ul>
            <li >
                <div class="item-rank">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 class="store-name">店舗名: </h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
