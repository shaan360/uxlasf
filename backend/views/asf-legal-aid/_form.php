<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfLegalAid */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-legal-aid-form custom-box">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>
<div class="box box-success">
       
    <div class="row">
        <div class="col-md-6">
    <?php echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'asf_legal_input')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_support_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_followup')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_advice')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_lawyer_support')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_lawyer_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_lawyer_contact')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_police_investigation')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_prosecuted')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

        </div>
        <div class="col-md-6">
    <?php echo $form->field($model, 'legal_court_case')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_court_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_court_place')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_judge_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_hearing')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_hearing_number')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_withdrawn_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_conviction')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'legal_conviction_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'legal_case_withdrawn')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
