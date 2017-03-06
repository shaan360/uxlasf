<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberPlotLedgerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Payment Received Reports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-plot-ledger-index">
  <div class="col-md-12" style="text-align: center;">
        <img src="<?php echo Yii::getAlias('@backendUrl') ?>/images/logo.png" />
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
          //  'accountant_id',
            //'member_id',
              [
            'attribute' => 'name',
           // 'contentOptions' => ['name' => 'name'],
            'format' => 'raw',
            'label' => 'Member Name',
            'value' => function ($model) {
             return $model->member->full_name;
        //['width' => '60px']);
            },
             ],
            //'unit_id',
               [
            'attribute' => 'unit_id',
           // 'contentOptions' => ['name' => 'name'],
            'format' => 'raw',
            'label' => 'Unit No',
            'value' => function ($model) {
             return $model->unit->unit_no;
        //['width' => '60px']);
            },
             ],        
            //'date_as_on',
            ['attribute' => 'date_as_on',
            'value' => 'date_as_on',
            'filter' => \yii\jui\DatePicker::widget(['language' => 'en', 'dateFormat' => 'yyyy-MM-dd','name'=>'date']),
            'format' => 'html',
            ],
             'particulars',
            // 'society_receipt',
            // 'payable_outstanding',
             'payment_received',
            // 'balance_outstanding',
            // 'remarks',
            // 'last_modified',
            // 'timestamp',

                            [
                    'class' => 'yii\grid\ActionColumn',
                    'template'=>'{view}'
                ],
        ],
    ]); ?>

</div>
