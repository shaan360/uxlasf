<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberShopLedgerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Member Shop Ledgers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-shop-ledger-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('backend', 'Add {modelClass}', [
    'modelClass' => 'Member Shop Ledger',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'accountant_id',
            'member_id',
            'shop_id',
            'date_as_on',
            // 'particulars',
            // 'society_receipt',
            // 'payable_outstanding',
            // 'payment_received',
            // 'balance_outstanding',
            // 'remarks',
            // 'last_modified',
            // 'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
