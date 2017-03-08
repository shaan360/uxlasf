<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\AsfPsychologicalInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-psychological-info-form custom-box">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>
<div class="box box-success">
       
    <div class="row">
    <div class="col-md-6">
     <label>Survivor ID</label>
        <?php
        echo Select2::widget([
            'model' => $model,
            'attribute' => 'survivor_id',
            'value'=>$model->survivor_id,
            //'initValueText'=>$model->member->full_name,
            'options' => ['placeholder' => 'Select Survivor ID ...', 'id' => 'survivor-drop'],
            'pluginOptions' => [
                'allowClear' => true,
                'ajax' => [
                    'url' => '../asf-survivor-detail/detail',
                    'dataType' => 'json',
                    'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
                ],
            ],
        ]);
        ?>    

    <?php echo $form->field($model, 'ncru_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_evaluated')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'ncru_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_evaluated_by')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_need_assistance')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'ncru_urgent')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
    
    <?php echo $form->field($model, 'pe_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_evaluated')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'pe_project')->textInput(['maxlength' => true]) ?>
    <?php echo $form->field($model, 'pe_evaluated_by')->textInput(['maxlength' => true]) ?>
    </div>
        <div class="col-md-6">
   

    <?php echo $form->field($model, 'pe_contact')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_evaluated_at')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_psychological_issue')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'pe_psychiatric_issue')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'next_follow_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'follow_required')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'pe_further_assistance')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>

    <?php echo $form->field($model, 'pe_diagnosis')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_within_weeks')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_recommended_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    </div>
