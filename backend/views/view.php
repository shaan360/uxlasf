<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\MemberPlots */

$this->title ="Detail View Of:".$model->member->full_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Unit'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-plots-view">
 <div class="col-md-12" style="text-align: center;">
        <img src="<?php echo Yii::getAlias('@backendUrl') ?>/images/logo.png" />
    </div>
   <?php if(!Yii::$app->user->can('user') || Yii::$app->user->can('manager') || Yii::$app->user->can('administrator') ){?>
    <p>
        <?php echo Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php
        echo Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
        <?php if (!empty($model->plot_document)) { ?>
        <a class="btn btn-success" href="<?= $model->photo_path ?>/<?= $model->plot_document ?>" download="">Download Document</a>
        <?php } ?>
    </p>
   <?php }?>
    <?php
    echo DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'table promo-table'],
        'attributes' => [
          //  'member_id',
            'unit_id',
            //'category',
           
           // 'unit_type',
            
            //'payment_mode',
               [
                'attribute'=>'payment_mode',
                'value'=>  common\models\Lookup::getPaymentMode($model->payment_mode)
            ],
       //     'plot_size',
            'plot_prize',
            [
            'attribute' => 'status',
            'format' => 'html',
            'value' =>  $model->status == 1 ? '<a class="btn btn-success">Approved<a>' : '<a class="btn btn-danger">Pending<a>',
            
             ],
            //'last_update',
        ],
    ])
    ?>

</div>
<?php if(Yii::$app->user->can('user') && !Yii::$app->user->can('manager') && !Yii::$app->user->can('administrator')){?>
<div class="col-md-12 custom-box">
    <div class="widget-user">
        <h2>Unit Payments</h2>
        <?php
        echo GridView::widget([
            'dataProvider' => $model->payments,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
              //  'id',
                'date_as_on',
                'particulars',
                'society_receipt',
                //'payable_outstanding',
                'payment_received',
                //'balance_outstanding',
                'remarks',
//                [
//                    'class' => 'yii\grid\ActionColumn',
//                    'template'=>'{view}'
//                ],
            ],
        ]);
        ?>
    </div>
</div>
<?php }else{?>
<div class="col-md-12 custom-box">
    <div class="widget-user">
        <h2>Unit Payments</h2>
        <?php
        echo GridView::widget([
            'dataProvider' => $model->payments,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
               // 'id',
                'date_as_on',
                'particulars',
                'society_receipt',
                //'payable_outstanding',
                'payment_received',
               // 'balance_outstanding',
                'remarks',
//                [
//                    'class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>
    </div>
</div>
<?php }?>
<?php
$payment_total = $model->paymentTotal();
$plan_type = $model->planType;
$play_payment_type = $model->plan_payment_type;
//var_dump($payment_total);
//var_dump($plan_type);exit;
if ($play_payment_type == 1) {
    $number_of_payments = round(($plan_type->price - $plan_type->downpayment) / $plan_type->quaterly_installment);
}
if($play_payment_type == 0){
    $number_of_payments = round(($plan_type->price - $plan_type->downpayment) / $plan_type->months_36_installment);
}
//var_dump($number_of_payments);
$price_total = 0;
$paid_total = 0;
$balance_total = 0;
$paid = 0;
$serial = 1;
if ($payment_total >= $plan_type->downpayment) {
    $paid = $plan_type->downpayment;
   
    $payment_total = $payment_total - $paid;
} else {
    $paid = $payment_total;
    //var_dump($paid);exit;
    $payment_total = 0;
}
$balance = $plan_type->downpayment - $paid;
$price_total +=$plan_type->downpayment;
$paid_total +=$paid;
$balance_total+=$balance;
?>
<div class="col-md-12 custom-box">
    
    <a href="#" class="btn btn-success" id="print" onclick="printscdule()" style="float: right">Print</a><br>
    <div id="print-sc">
    <div class="widget-user">
        <h2>Payment Schedule</h2>
        <table class="table table-striped table-bordered"><thead>
                <tr><th>Serial</th><th>Outstanding Payment</th><th>Paid</th><th>Balance</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $serial ?></td>
                    <td><?= $plan_type->downpayment ?></td>
                    <td><?= $paid ?></td>
                    <td><?= $balance ?></td>
                </tr>
                <?php $count=2;
                for($i = 1; $i <= $number_of_payments; $i++) { ?>
                    <?php
                    if ($payment_total >= ($play_payment_type==1?$plan_type->quaterly_installment:$plan_type->months_36_installment)) {
                        $paid = $play_payment_type==1?$plan_type->quaterly_installment:$plan_type->months_36_installment;
                        $payment_total = $payment_total - $paid;
                    } else {
                        $paid = $payment_total;
                        $payment_total = 0;
                    }
                    $balance = ($play_payment_type==1?$plan_type->quaterly_installment:$plan_type->months_36_installment) - $paid;
                    $price_total +=($play_payment_type==1?$plan_type->quaterly_installment:$plan_type->months_36_installment);
                    $paid_total +=$paid;
                    $balance_total+=$balance;
                    ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $play_payment_type==1?$plan_type->quaterly_installment:$plan_type->months_36_installment ?></td>
                        <td><?= $paid ?></td>
                        <td><?= $balance ?></td>
                    </tr>
                    <?php
                    $count++;
                    ?>
                <?php } ?>
                <tr>
                    <td>Total</td>
                    <th><?= $price_total ?></th>
                    <th><?= $paid_total ?></th>
                    <th><?= $balance_total ?></th>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>

