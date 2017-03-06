<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Lookup;
/* @var $this yii\web\View */
/* @var $model common\models\InstallmentPlan */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="installment-plan-form col-md-12">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>
    <div class="col-md-4">
        <?php echo $form->field($model, 'installment_plan_name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
        <?php echo $form->field($model, 'installment_plan_price')->textInput() ?>
    </div>
    <div class="col-md-4">
        <?php echo $form->field($model, 'installment_downpayment_percentage')->textInput() ?>
    </div>
    <div class="col-md-12" style="padding:0px;border:solid 1px #ccc;">
    <div class="col-md-12">
        <label>Installment Schedules</label>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td><input class="form-control" placeholder="Type" type="text" Name="ScheduleInput[installment_type]" id="installment_type" /></td>
                    <td><input class="short-input form-control" Placeholder="Beds" type="text" Name="ScheduleInput[installment_beds]" id="installment_beds" /></td>
                    <td><input class="short-input form-control" Placeholder="Size" type="text" Name="ScheduleInput[installment_size]" id="installment_size" /></td>
                    <td><input class="form-control" Placeholder="Price" type="text" Name="ScheduleInput[installment_price]" id="installment_price" /></td>
                    <td><input class="form-control" Placeholder="Down Payement" type="text" Name="ScheduleInput[installment_down_payment]" id="installment_down_payment" /></td>
                    <td><input class="form-control" Placeholder="36 Month Installments" type="text" Name="ScheduleInput[installment_36month]" id="installment_36month" /></td>
                    <td><input class="form-control" Placeholder="Quarterly Insatllment" type="text"Name="ScheduleInput[installment_quarterly]" id="installment_quarterly" /></td>
                    <td><button type="button" onclick="addInstallment()" class="btn btn-success">Add</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <table class="table table-striped" id="schedule-table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>No. of Beds</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Down Payment</th>
                    <th>36 months Installment</th>
                    <th>Quarterly Installment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!$model->isNewRecord){ ?>
                <?php foreach ($model->installmentPlanSchedules as $key=>$plan){ ?>
                <tr id="row-<?= $key ?>">
                    <td>
                    <input type="text" class="border" value="<?= $plan->type ?>" name="Schedule[<?= $key ?>][type]">
                    <?= $form->field($plan, 'unit_type')->dropDownList(Lookup::items('unit_type'), ['prompt' => 'Select Select']) ?>
                </td>
                <td><input type="text" class="short-input"  value="<?= $plan->number_of_beds ?>" name="Schedule[<?= $key ?>][installment_beds]"></td>
                <td><input type="text" class="short-input" value="<?= $plan->size ?>" name="Schedule[<?= $key ?>][installment_size]"></td>
                <td><input type="text" class="border" value="<?= $plan->price ?>" name="Schedule[<?= $key ?>][installment_price]"></td>
                <td><input type="text" class="border" value="<?= $plan->downpayment ?>" name="Schedule[<?= $key ?>][installment_down_payment]"></td>
                <td><input type="text" class="border" value="<?= $plan->months_36_installment ?>" name="Schedule[<?= $key ?>][installment_36month]"></td><td>
                <input type="text" class="border" value="<?= $plan->quaterly_installment ?>" name="Schedule[<?= $key ?>][installment_quarterly]"></td>
                <td><button type="button" onclick="romoveRow('schedule-table',<?= $key ?>)">Remove</button></td></tr>
                <?php }}?>
            </tbody>
        </table>
    </div>
</div>
    <div class="col-md-12">
        <?php echo $form->field($model, 'note')->textarea(['rows' => 2]) ?>
    </div>



    <div class="form-group col-md-12">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
