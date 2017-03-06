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

  <!-- Main content -->

      
    <section class="invoice">
      <!-- title row -->
      <div class="row">
          <div class="no-print">
        <a href="#" target="_blank" class="btn btn-default" onclick="window.print();" style="float: right"><i class="fa fa-print"></i> Print</a>  
          </div>
           <div class="col-md-12" style="text-align: center;">
        <img src="<?php echo Yii::getAlias('@backendUrl') ?>/images/logo.png" />
    </div>
        <div class="col-xs-12">
          <h2 class="page-header">
              <p><strong>Unit#</strong><?php echo $model->unit->unit_no; ?></p>
            <small class="pull-right">Date: <?php echo $model->date; ?></small>
          </h2>
        </div>
        <!-- /.col -->
      
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
         
         
            <strong>Membership Detail</strong><br><br>
            <b>Membership #: </b><?php echo $model->member->membership_number; ?><br>
          <b>Plan:</b> <?php echo $model->plan->installment_plan_name; ?><br>
          <b>Name:</b> <?php echo $model->member->full_name; ?><br>
          <b>Contact:</b> <?php echo $model->member->mobile; ?><br>
          <b>Address: </b> <?php echo $model->member->postal_address; ?>
         
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        
            <strong>Unit Details</strong><br>
           <b>Unit #:</b> <?php echo $model->unit->unit_no; ?><br>
          
          <b>Size:</b> <?php echo $model->unit->size; ?>(sqt)<br>
          <b>Category:</b> <?php echo \common\models\Lookup::item('category',$model->unit->category); ?><br>
          <b>Unit Type:</b> <?php echo \common\models\Lookup::item('unit_type',$model->unit->unit_type); ?><br>
          <b>Floor:</b> <?php echo \common\models\Lookup::item('floors',$model->unit->floor); ?>
          
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Order #: <?php echo $model->id; ?></b><br>
          <br>
          <b>Payment Mode:</b> <?php echo \common\models\Lookup::item('payment_schedule',$model->payment_mode); ?><br>
        
          <b>Pirce:</b> <?php echo $model->plot_prize; ?>/Sqt<br>
            <b>Total:</b> <?php echo $model->plot_prize*$model->unit->size; ?> PKR<br>
            <b>Down Ppayment:</b> <?php echo $model->downpayment(); ?> PKR<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
      <!-- Table row -->
      <div class="row">
            <?php
        echo GridView::widget([
            'dataProvider' => $model->payments,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
              //  'id',
                'date_as_on',
                'particulars',
                'society_receipt',
    //              [
    // 'attribute'=>'payment_mode',
    // 'value'=> function($model){ 
    //   return Lookup::item('payment_mode',$model->payment_mode)
    // }
  
    // ] ,
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
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
       
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Total Received:</th>
                <td><?php echo $model->paymentTotal(); ?></td>
              </tr>
              <tr>
                <th>Total Pending</th>
                <td><?php echo $model->balanceAmount(); ?></td>
              </tr>
            
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
<!--      <div class="row no-print">
        <div class="col-xs-12">
          <a href="#" target="_blank" class="btn btn-default" onclick="printscdule()"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
        
        </div>
      </div>-->
    </section>
<?php
$payment_total = $model->paymentTotal();
$unit_price = $model->unitPrice;
$unit_size = $model->unit;
$installment_plan=$model->plan;
$plan_payment_type = $model->planPaymentType;
//var_dump($payment_total);exit;
//var_dump($unit_size);exit;
$unit_type=$unit_size->unit_type;
$gettype= common\models\Lookup::item('unit_type', $unit_type);
$totalPrice=$model->totalPrice();
//var_dump($totalPrice);exit;
if($gettype=="A(Corner)"||$gettype=="B(Corner)"){
    $corner_charges=$model->cornerCharges();
    $totalPrice=$totalPrice+$corner_charges;
}
$downpayment= $model->downpayment();

if ($plan_payment_type->id == 39) {
   
    $yearly= $model->totalinstallmentAmount()/3;
    $number_of_payments = round($model->totalinstallmentAmount() /$yearly);
}
if($plan_payment_type->id == 41){
   
    $quarterly= $model->totalinstallmentAmount()/12;
   
    $number_of_payments = round($model->totalinstallmentAmount() /$quarterly);
 //var_dump($number_of_payments);exit;
    
}
if($plan_payment_type->id == 40){
  
    $tsixmonth= $model->totalinstallmentAmount()/36;
    $number_of_payments = round($model->totalinstallmentAmount() /$tsixmonth);
}
//var_dump($number_of_payments);
$price_total = 0;
$paid_total = 0;
$balance_total = 0;
$paid = 0;
$serial = 1;
if ($payment_total >= $downpayment) {
    $paid = $downpayment;
 //var_dump($paid);exit;  
    $payment_total = $payment_total - $paid;
} else {
    $paid = $payment_total;
    
    $payment_total = 0;
}
$balance = $downpayment - $paid;
$price_total =$model->totalPrice();
$paid_total +=$paid;
$balance_total=0;
$months=0;
?>
<div class="col-md-12 custom-box">
    
    <!--<a href="#" class="btn btn-success" id="print" onclick="printscdule()" style="float: right">Print</a><br>-->
    <div id="print-sc">
    <div class="widget-user">
        <h2>Payment Schedule</h2>
        <table class="table table-striped table-bordered"><thead>
                <tr><th>Serial</th><th>Description</th><th>Date</th><th>Outstanding Payment (PKR)</th><th>Paid (PKR)</th><th>Balance (PKR)</th></tr>
            </thead>
            <tbody>

                <tr>
                    <td><?= $serial ?></td>
                     <td>Down payment</td>
                     <td><?= $model->date ?></td>
                    <td><?= $model->downpayment() ?></td>
                    <td><?= $paid ?></td>
                    <td><?= $balance ?></td>
                </tr>
                <?php $count=2;
                for($i = 1; $i <= $number_of_payments; $i++) { ?>
                    <?php
                    if($plan_payment_type->id==39){
                      $months+=12;
                    if ($payment_total >= $yearly) {
                        $paid = $yearly;
                        $payment_total = $payment_total - $paid;
                    } else {
                        $paid = $payment_total;
                        $payment_total = 0;
                    }
                    }
                     if($plan_payment_type->id==41){
                       $months+=3;
                    if ($payment_total >= $quarterly) {
                        $paid = $quarterly;
                        $payment_total = $payment_total - $paid;
                    } else {
                        $paid = $payment_total;
                        $payment_total = 0;
                    }
                    }
                       if($plan_payment_type->id==40){
                         $months+=1;
                    if ($payment_total >= $tsixmonth) {
                        $paid = $tsixmonth;
                        $payment_total = $payment_total - $paid;
                    } else {
                        $paid = $payment_total;
                        $payment_total = 0;
                    }
                    }
                    if($plan_payment_type->id==39){
                    $balance = $yearly - $paid;
                    $price_total +=$yearly;
                    $paid_total +=$paid;
                    $balance_total+=$balance;
                    }
                    if($plan_payment_type->id==40){
                    $balance = $tsixmonth - $paid;
                    $price_total +=$tsixmonth;
                    $paid_total +=$paid;
                    $balance_total+=$balance;
                    }
                    if($plan_payment_type->id==41){
                    $balance = $quarterly - $paid;
                    $price_total +=$quarterly;
                    $paid_total +=$paid;
                    $balance_total+=$balance;
                    }
                    ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td>Installment </td>
                         <td><?=date('Y-m-d',strtotime('+'.$months.' month',strtotime($model->date))) ?></td>
                        <td><?php echo round($model->totalinstallmentAmount()/$number_of_payments);?></td>
                        
                        <td><?= round($paid) ?></td>
                        <td><?= round($balance) ?></td>
                    </tr>
                    <?php
                    $count++;
                    ?>
                <?php } ?>
               <?php  if($gettype=="A(Corner)"||$gettype=="B(Corner)"){
                ?>
                <tr>
                    <td><?= $count ?></td>
                     <td>Corner Charges</td>
                      <td><?= $model->date ?></td>
                    <td><?= round($model->cornerCharges()) ?></td>
                    <td><?= round($model->cornerCharges()) ?></td>
                    <td><?= round($balance) ?></td>
                </tr>

<?php 
$count++;
} ?>
                 <tr>
                    <td><?= $count ?></td>
                     <td>Possession Charges</td>
                      <td><?= $model->date ?></td>
                    <td><?= round($model->possessionCharges()) ?></td>
                    <td><?= round($model->possessionCharges()) ?></td>
                    <td><?= round($balance) ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Total</td>
                    <td></td>
                    <th><?= round($model->totalPrice()+$model->cornerCharges()); ?></th>
                    <th><?= $paid_total ?></th>
                    <th><?= round($model->totalCharges()-$model->paymentTotal()); ?></th>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
  </div>