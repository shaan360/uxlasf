<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShopLedger */


?>
    <div class="installment-plan-view">
      <div class="col-md-12" style="text-align: center;">
        <img src="<?php echo Yii::getAlias('@backendUrl') ?>/images/logo.png" />
    </div>
        <div class="col-md-12">
        <h1 style="text-align: center;">Shop Ledger Detail</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>accountant_id</th>
                <th>Member Name</th>
                <th>particulars</th>
                <th>society_receipt</th>
                <th>payable_outstanding</th>
                <th>payment_received</th>
                <th>balance_outstanding</th>
            </tr>
        </thead>
        <tbody>
          
            <tr>
                <td><?= $model->accountant_id ?></td>
                <td><?= $model->member_id ?></td>
                <td><?= $model->particulars?></td>
                <td><?= $model->society_receipt ?></td>
                <td><?= $model->payable_outstanding ?></td>
                <td><?= $model->payment_received ?></td>
                <td><?= $model->balance_outstanding ?></td>
                
            </tr>
           
        </tbody>
    </table>

</div>
