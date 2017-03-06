<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MemberPlotLedger */

?>

<div class="container">
      
    <div class="row">
       
           
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
             <div class="no-print">
        <a href="#" target="_blank" class="btn btn-default" onclick="window.print();" style="float: right"><i class="fa fa-print"></i> Print</a>  
          </div>
            <div class="row">
             
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>GulbergEmpire.com</strong>
                        <br>
                        P.O. Box 2012
                        <br>
                        Islamabad, F-10 48000
                        <br>
                        <abbr title="Phone">P:</abbr> (051) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo $model->date_as_on ?></em>
                    </p>
                    <p>
                        <em>Receipt #: <?= $model->society_receipt ?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <img src="<?php echo Yii::$app->request->baseUrl ?>/images/logo.png" alt="" width="150" height="100">
                    <h1>Unit Ledger Receipt</h1><br>
                    <div class="col-md-5">
                    <p><strong>Member Name:</strong> <?= $model->member->full_name ?></p>
                    </div>
                    <div class="col-md-3">
                    <p><strong>Unit N0:</strong> <?= $model->unit->unit_no ?></p>
                </div>
                    <div class="col-md-4">
                        <p><strong>Payment Mode:</strong> <?= common\models\Lookup::item('payment_mode', $model->payment_mode) ?></p>
                </div>
                </div>
                </span>
                <table class="table scheme-promo-table">
                    <thead>
                        <tr>
                            <th>Particulars</th>
                            <th class="text-center">Amount Received</th>
                            <th class="text-center">Total Amount Received</th>
                        </tr>
                    </thead>
                    <tbody>
                                 <?php
                               $price= $model->plot;
                               
                               
                               //var_dump($price);exit;
                               $payment_total = $model->paymentTotal();
                               $unit_size= $model->unit;
                               $unit_type=$unit_size->unit_type;
                               //var_dump($unit_size);exit;
                               $size=$unit_size->size;
                               $gettype= common\models\Lookup::item('unit_type', $unit_type);
                               $total_p = $price->plot_prize*$size;
                              if($gettype=="A(Corner)"||$gettype=="B(Corner)"){
                                $corner_charges=($total_p/100)*10;
                              $total_p=$total_p+$corner_charges;
                                }
                               $pending_amount= $total_p - $payment_total;
                                    ?>
                        <tr>
                            <td class="col-md-5"><em><?= $model->particulars?></em></h4></td>
                            <td class="col-md-3 text-center">Rs: <?= $model->payment_received ?></td>
                            <td class="col-md-4 text-center">Rs: <?= $payment_total ?></td>
                        </tr>
                      
                        <tr>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong></strong>
                            </p>
                            </td>
                            <td class="text-center">
                            <p>
        
                                <strong></strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                           
                            <td class="text-right"><strong>Total Outstanding Balance </strong></td>
                            <td class="text-center text-danger"><h4><strong>Rs:<?php echo $pending_amount  ?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <p style="text-align:left;">
                       Signature_________________________ .
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
