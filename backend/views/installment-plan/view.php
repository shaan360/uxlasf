<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\InstallmentPlan */

//var_dump($model->installmentPlanSchedules);
?>
<div class="installment-plan-view custom-box">
    <a href="#" class="btn btn-success" id="print" onclick="window.print()" style="float: right">Print</a><br>
    <div class="col-md-12" style="text-align: center;">
        <img src="<?php echo Yii::getAlias('@backendUrl') ?>/images/logo.png" />
    </div>
    <div class="col-md-12">
        <h1 style="padding: 5px;text-align: center;"><?= $model->installment_plan_name ?> <small><?= $model->installment_plan_price.' PKR/Sq Feet' ?></small></h1>
    </div>
    <table class="table scheme-promo-table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Size (Sq Feet)</th>
                <th>Price (PKR)</th>
                <th><?php echo $model->installment_downpayment_percentage.' % '; ?>Down Payment</th>
                <th>36 Installments(Months)</th>
                <th>Quarterly Installment</th>
            </tr>
        </thead>
        <tbody>
            <?php 
             $schedule =  \common\models\InstallmentPlanSchedule::find()->orderBy('type')->all();
       

            foreach($schedule as $installment){?>
            <tr>
                <td><?= $installment->type ?></td>
                <td><?= $installment->size ?></td>
                <td><?= $installment->size*$model->installment_plan_price ?></td>
                <td><?= ($installment->size*$model->installment_plan_price)*$model->installment_downpayment_percentage/100 ?></td>
                <td><?= (($installment->size*$model->installment_plan_price)*$model->installment_downpayment_percentage/100)/36 ?></td>
                <td><?= (($installment->size*$model->installment_plan_price)*$model->installment_downpayment_percentage/100)/12 ?></td>
                
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="col-md-12" style="text-align: center; padding: 10px; color: #fff; background: #505050;">
        <?= $model->note ?>
    </div>
</div>
