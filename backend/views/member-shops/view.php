<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShops */

$this->title = $model->shop_size . "(" . $model->shop_no . ")";
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Shops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-shops-view">

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
        <?php if (!empty($model->shop_document)) { ?>
            <a class="btn btn-success" href="<?= $model->photo_path ?>/<?= $model->shop_document ?>" >Download Document</a>
    <?php } ?>
    </p>

    <?php
    echo DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'custom-short-table'],
        'attributes' => [
            'id',
            'accountant_id',
            'member_id',
            'shop_no',
            'unit_type',
            'category',
            'payment_mode',
            'shop_size',
            'shop_prize',
            'status',
            'last_update',
        ],
    ])
    ?>

</div>
<h2>Shop Payments</h2>
<div class="custom-box">
    <?php
    echo GridView::widget([
        'dataProvider' => $model->payments,
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
    ]);
    ?>
    
</div>
<?php
$payment_total = $model->paymentTotal();
$plan_type = $model->planType;
$play_payment_type = $model->plan_payment_type;
//var_dump($play_payment_type);exit;
if ($play_payment_type == 1) {
    $number_of_payments = round(($plan_type->price - $plan_type->downpayment) / $plan_type->quaterly_installment);
}
if ($play_payment_type == 0) {
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
    $payment_total = 0;
}
$balance = $plan_type->downpayment - $paid;
$price_total += $plan_type->downpayment;
$paid_total += $paid;
$balance_total += $balance;
?>
<div class="col-md-12 custom-box">
    <div class="widget-user">
        <h2>Payment Schedule</h2>
        <table class="table table-striped table-bordered"><thead>
                <tr><th>Serial</th><th>Payment</th><th>Paid</th><th>Balance</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $serial ?></td>
                    <td><?= $plan_type->downpayment ?></td>
                    <td><?= $paid ?></td>
                    <td><?= $balance ?></td>
                </tr>
                <?php for ($i = 1; $i <= $number_of_payments; $i++) { ?>
                    <?php
                    if ($payment_total >= ($play_payment_type == 1 ? $plan_type->quaterly_installment : $plan_type->months_36_installment)) {
                        $paid = $play_payment_type == 1 ? $plan_type->quaterly_installment : $plan_type->months_36_installment;
                        $payment_total = $payment_total - $paid;
                    } else {
                        $paid = $payment_total;
                        $payment_total = 0;
                    }
                    $balance = ($play_payment_type == 1 ? $plan_type->quaterly_installment : $plan_type->months_36_installment) - $paid;
                    $price_total += ($play_payment_type == 1 ? $plan_type->quaterly_installment : $plan_type->months_36_installment);
                    $paid_total += $paid;
                    $balance_total += $balance;
                    ?>
                    <tr>
                        <td><?= $serial ?></td>
                        <td><?= $play_payment_type == 1 ? $plan_type->quaterly_installment : $plan_type->months_36_installment ?></td>
                        <td><?= $paid ?></td>
                        <td><?= $balance ?></td>
                    </tr>
                    <?php
                    $serial++;
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

