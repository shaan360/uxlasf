<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberApartmentLedgerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Member Apartment Ledgers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-apartment-ledger-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('backend', 'Add {modelClass}', [
    'modelClass' => 'Member Apartment Ledger',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           // 'accountant_id',
            //'member_id',
                  [
            'attribute' => 'member_id',
            'format' => 'html',
            'label' => 'Member Name',
            'value' => function ($model) {
             return $model->member->full_name;
        //['width' => '60px']);
            },
             ],
            'appartment_id',
            //'date_as_on',
            ['attribute' => 'date_as_on',
            'value' => 'date_as_on',
            'filter' => \yii\jui\DatePicker::widget(['language' => 'en', 'dateFormat' => 'yyyy-MM-dd']),
            'format' => 'html',
            ],
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
