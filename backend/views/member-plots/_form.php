<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use common\models\Lookup;
use kartik\widgets\Typeahead;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\MemberPlots */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="col-md-12 btn-block-bar">
    
    <?php  echo Html::a('Add Member '.'<i class="fa fa-arrow-circle-right"></i>', ['members/create'], ['class'=>'btn btn-warning'] ); ?> 
        
</div>
<div class="member-plots-form col-md-12 custom-box">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'inline-input-form']]); ?>
    <div class="col-md-12">
        <?php echo $form->errorSummary($model); ?>
    </div>
    <div class="col-md-5 col-bottom-padding">

        <label class="control-label" for="member-plot-date">Date</label>  
        <?=
        DatePicker::widget([
            'name' => 'date',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->date,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                
            ]
        ])
        ?>
    </div>
  <?php if(!Yii::$app->user->can('user') || Yii::$app->user->can('manager')||Yii::$app->user->can('administrator')){?>
    <div class="col-md-5 col-bottom-padding">
        <label>Member</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'member_id',
            'value'=>$model->member_id,
            //'initValueText'=>$model->member->full_name,
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
  <?php }?>
   

        <div class="col-md-5 col-bottom-padding">
            <?php
            // echo $form->field($model, 'member_id')->widget(Typeahead::classname(), [
            // 'name' => 'member_id',
            // 'options' => ['placeholder' => 'Enter Account No ...'],
            // //  'scrollable' => true,
            // 'pluginOptions' => ['highlight' => true],
            // 'dataset' => [
            //     [
            //     'remote' => [
            //         'url' => Url::to(['../installment-plan/plans']) . '?q=%ejjj',
            //         'wildcard' => '%ejjj',

            //     ],
                
            //     'limit' => 60,
            //     'display' => 'value'
            //     ]
            // ],
            // 'pluginEvents' => [
            // "typeahead:selected" => "function(evt, item) {
            // $('#customer_details').show();
            // $('#transactions-customer_id').val(item.customer_id);
            // $('#transactions-customeraccount_id').val(item.account_id);
            // $('#transactions-account_type').val(item.account_type);
            // $('#transactions-account_type2').html(item.account_typeshow);
            // $('#transactions-rf_account').val(item.account_no);
            // $('#customer_title').html(item.account_title);
            // $('#operation_type').html(item.operation_type);
            // $('#balance').html(item.balance);
            // $('#signaure_img').html(item.signature_img);
            // $('#photo_img').html(item.photo_img);
            // }",
            // ]
            // ]);
            ?>
            <label>Installment Plan</label>
            <?php
            echo Select2::widget([
                'model' => $model,
                'attribute' => 'installment_plan_id',
                'value'=>$model->installment_plan_id,
                //'initValueText'=>$model->plan->installment_plan_name,
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
             <label>Unit No</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'unit_id',
            'value'=>$model->unit_id,
            //'initValueText'=>$model->member->full_name,
            'options' => ['placeholder' => 'Select Unit No ...', 'id' => 'unit-drop'],
            'pluginOptions' => [
                'allowClear' => true,
                'ajax' => [
                    'url' => '../units/list',
                    'dataType' => 'json',
                    'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
                ],
            ],
        ]);
        ?> 
        </div>
    
    
    <div class="col-md-5 col-bottom-padding">
       
<?= $form->field($model, 'payment_mode')->dropDownList(Lookup::items('payment_schedule'), ['prompt' => 'Select Select']) ?>

    </div>
    <div class="col-md-5 col-bottom-padding">
      
    </div>
 
    <div class="col-md-5">
        <?php echo $form->field($model, 'plot_prize')->textInput(['maxlength' => true]) ?>
        <?php
        /*
          echo MaskMoney::widget([
          'name' => 'plot_prize',
          'value' => 122423.18,
          'pluginOptions' => [
          'prefix' => 'PKR ',
          ],
          ]);
         * 
         */
        ?>
    </div>
    <?php if(!Yii::$app->user->can('user') || Yii::$app->user->can('manager')||Yii::$app->user->can('administrator')){?>
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
    <?php }?>
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
