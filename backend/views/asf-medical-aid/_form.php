<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfMedicalAid */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-medical-aid-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'asf_medical_provided')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'medical_aid_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'asf_nutrition_provided')->dropDownList([ '' => '', 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'asf_nutrition_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'asf_physiotherapy_provided')->dropDownList([ '' => '', 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'asf_physiotherapy_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'treatment_area')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'assessment')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'assessment_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'procedure')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'associated_procedure')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'procedure_number')->textInput() ?>

    <?php echo $form->field($model, 'assessment_number')->textInput() ?>

    <?php echo $form->field($model, 'medicine')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'medicine_expense')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'doctor_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'hospital_clinic_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'asf_stayed_days')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_discharge_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_admission_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'medical_follow_up')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'days_at_hospital')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'hospital_admission_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'procedure_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'hospital_discharge_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'stay_at_ncru')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
