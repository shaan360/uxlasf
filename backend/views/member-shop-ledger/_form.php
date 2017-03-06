<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\MemberPlotLedger */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-plot-ledger-form custom-box">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-12">
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="col-md-5">
        <label>Member</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'member_id',
            'initValueText'=>  common\models\Members::findOne($model->member_id)?common\models\Members::findOne($model->member_id)->full_name:"",
            'options' => ['placeholder' => 'Select member ...', 'id' => 'member-drop','onchange'=>"$('#plot_id-drop').val(null).trigger('change');"],
            'pluginOptions' => [
                'allowClear' => true,
                'ajax' => [
                    'url' => '../members/members',
                    'dataType' => 'json',
                    'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
                ],
            ],
        ]);
        ?>
    </div>
    <div class="col-md-5">
        <label>Shop</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'shop_id',
            'initValueText'=> common\models\MemberShops::findOne($model->shop_id)? common\models\MemberShops::findOne($model->shop_id)->shop_no:"",
            'options' => ['placeholder' => 'Select shop ...', 'id' => 'shop_id-drop'],
            'pluginOptions' => [
                'allowClear' => true,
                'ajax' => [
                    'url' => '../member-shops/shops',
                    'dataType' => 'json',
                    'data' => new \yii\web\JsExpression('function(params) { var member = $("#member-drop").val(); return {q:params.term,member:member}; }')
                ],
            ],
        ]);
        ?>
    </div>
    <div class="col-md-5">
        <label class="control-label" for="member-plot-ledger-date_as_on">Date</label>
        <?=
        DatePicker::widget([
            'name' => 'date_as_on',
            //'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'value'=>$model->date_as_on,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
            ]
        ])
        ?>
    </div>
    <div class="col-md-5">
<?php echo $form->field($model, 'particulars')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-5">
<?php echo $form->field($model, 'society_receipt')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-5">
<?php echo $form->field($model, 'payable_outstanding')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-5">
<?php echo $form->field($model, 'payment_received')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-10">
<?php echo $form->field($model, 'remarks')->textarea(['maxlength' => true]) ?>
    </div>

    <div class="form-group col-md-10">
<?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Submit') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
