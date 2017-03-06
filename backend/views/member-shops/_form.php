<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShops */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-shops-form custom-box">

    <?php $form = ActiveForm::begin(['options' => ['class' => 'inline-input-form']]); ?>
    <div class="col-md-12">
        <?php echo $form->errorSummary($model); ?>
    </div>
    <div class="col-md-12">
        <div class="col-md-5 col-bottom-padding">
            <label class="control-label" for="member-plot-date">Date</label>  
            <?=
            DatePicker::widget([
                'name' => 'date',
                //'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                'type' => DatePicker::TYPE_INPUT,
                'value' => $model->date,
                'options' => ['placeholder' => 'Select Date...'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ])
            ?>
    </div>
         <div class="col-md-5 col-bottom-padding">
             <label>Unit Type</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'unit_type',
            'data' => common\models\Lookup::getUnitType(),
            'options' => ['data-url' => 'details', 'id' => 'unit-type-drop'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); // Classic Theme
        ?>
 </div>
    </div>
    <div class="col-md-12">
    <div class="col-md-5 col-bottom-padding">
        <label>Installment Plan</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'installment_plan_id',
            'options' => ['placeholder' => 'Select Installment Plan ...', 'id' => 'installment-drop'],
            'pluginOptions' => [
                'allowClear' => true,
                'ajax' => [
                    'url' => '../installment-plan/plans',
                    'dataType' => 'json',
                    'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
                ],
            ],
        ]);
        ?>  
    </div>
   
            <div class="col-md-5 col-bottom-padding">
            <label>Installment Plan Type</label>
            <?php
            echo Select2::widget([
                'model' => $model,
                'attribute' => 'plan_type',
                'options' => ['placeholder' => 'Select Installment Plan Type ...', 'id' => 'installment-type-drop'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'ajax' => [
                        'url' => '../installment-plan/plan-types',
                        'dataType' => 'json',
                        'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
                    ],
                ],
            ]);
            ?>  
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-5 col-bottom-padding">
            <label>Member</label>
            <?php
            echo Select2::widget([
                'model' => $model,
                'attribute' => 'member_id',
                'options' => ['placeholder' => 'Select member ...', 'id' => 'member-drop'],
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
        <div class="col-md-5 col-bottom-padding">
            <label>Status</label>
            <?php
            echo Select2::widget([
                'model' => $model,
                'attribute' => 'status',
                'data' => common\models\Lookup::getDocumentStatus(),
                'options' => ['data-url' => 'details', 'id' => 'status-drop'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); // Classic Theme
            ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-5">
            <?php echo $form->field($model, 'shop_no')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-5">
            <label>Category</label>
            <?php
            echo Select2::widget([
                'model' => $model,
                'attribute' => 'category',
                'data' => common\models\Lookup::getShopCategories(),
                'options' => ['data-url' => 'details', 'id' => 'shop-category-drop'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); // Classic Theme
            ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-5">
            <label>Payment Mode</label>
            <?php
            echo Select2::widget([
                'model' => $model,
                'attribute' => 'payment_mode',
                'data' => common\models\Lookup::getPaymentModes(),
                'options' => ['data-url' => 'details', 'id' => 'payment-mode-drop'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); // Classic Theme
            ?>
        </div>
            <div class="col-md-5 col-bottom-padding">
        <label>Payment Type</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'plan_payment_type',
            'data' => common\models\Lookup::getPlanPaymentModes(),
            'options' => ['data-url' => 'details', 'id' => 'plan-payment-type-drop'],
            'pluginOptions' => [
                'allowClear' => true,
            ],
        ]); // Classic Theme
        ?>
    </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-5">
            <?php echo $form->field($model, 'shop_size')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-5">
            <?php echo $form->field($model, 'shop_prize')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-10" style="border: solid 1px #ecf0f5;margin-bottom: 10px;">
        <div class="col-md-5">
            <?php
            echo $form->field($model, 'pic')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?>
        </div>
    </div>
    <div class="form-group col-md-10">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Submit') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
