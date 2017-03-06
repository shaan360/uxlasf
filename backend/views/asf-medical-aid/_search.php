<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfMedicalAidSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-medical-aid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'survivor_id') ?>

    <?php echo $form->field($model, 'asf_medical_provided') ?>

    <?php echo $form->field($model, 'medical_aid_date') ?>

    <?php echo $form->field($model, 'project') ?>

    <?php // echo $form->field($model, 'asf_nutrition_provided') ?>

    <?php // echo $form->field($model, 'asf_nutrition_project') ?>

    <?php // echo $form->field($model, 'asf_physiotherapy_provided') ?>

    <?php // echo $form->field($model, 'asf_physiotherapy_project') ?>

    <?php // echo $form->field($model, 'treatment_area') ?>

    <?php // echo $form->field($model, 'assessment') ?>

    <?php // echo $form->field($model, 'assessment_date') ?>

    <?php // echo $form->field($model, 'procedure') ?>

    <?php // echo $form->field($model, 'associated_procedure') ?>

    <?php // echo $form->field($model, 'procedure_number') ?>

    <?php // echo $form->field($model, 'assessment_number') ?>

    <?php // echo $form->field($model, 'medicine') ?>

    <?php // echo $form->field($model, 'medicine_expense') ?>

    <?php // echo $form->field($model, 'doctor_name') ?>

    <?php // echo $form->field($model, 'hospital_clinic_name') ?>

    <?php // echo $form->field($model, 'asf_stayed_days') ?>

    <?php // echo $form->field($model, 'ncru_discharge_date') ?>

    <?php // echo $form->field($model, 'ncru_admission_date') ?>

    <?php // echo $form->field($model, 'medical_follow_up') ?>

    <?php // echo $form->field($model, 'days_at_hospital') ?>

    <?php // echo $form->field($model, 'hospital_admission_date') ?>

    <?php // echo $form->field($model, 'procedure_date') ?>

    <?php // echo $form->field($model, 'hospital_discharge_date') ?>

    <?php // echo $form->field($model, 'stay_at_ncru') ?>

    <?php // echo $form->field($model, 'comments_remarks') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
