<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-survivor-info-form">
    
    <?php $form = ActiveForm::begin(); ?>
         <?php echo $form->errorSummary($model); ?>
    
    <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Survivor Info</h3>
        </div>
    <div class="row">
    <div class="col-md-4">
    <?php echo $form->field($model, 'attack_id')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'accident_suicide')->dropDownList([ '' => '', 'Accident' => 'Accident', 'Suicide' => 'Suicide', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'survivor_stat')->dropDownList([ 'Dead' => 'Dead', 'Alive' => 'Alive', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'asf_reported_day')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12', 13 => '13', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18', 19 => '19', 20 => '20', 21 => '21', 22 => '22', 23 => '23', 24 => '24', 25 => '25', 26 => '26', 27 => '27', 28 => '28', 29 => '29', 30 => '30', 31 => '31', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'asf_reported_month')->dropDownList([ 'January' => 'January', 'February' => 'February', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'June' => 'June', 'July' => 'July', 'August' => 'August', 'September' => 'September', 'October' => 'October', 'November' => 'November', 'December' => 'December', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'asf_reported_mon')->dropDownList([ '01' => '01', '02' => '02', '03' => '03', '04' => '04', '05' => '05', '06' => '06', '07' => '07', '08' => '08', '09' => '09', 10 => '10', 11 => '11', 12 => '12', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'asf_reported_year')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'asf_assisted')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'cnic_availible')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'cnic')->textInput() ?>

    <?php echo $form->field($model, 'gender')->dropDownList([ 'male' => 'Male', 'female' => 'Female', 'other' => 'Other', ], ['prompt' => '']) ?>
     <?php echo $form->field($model, 'otherFile')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'court_settlement')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'settlement_agreement')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>
   
       </div>
       <div class="col-md-4">
    <?php echo $form->field($model, 'incident_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'before_year')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'attacked_age')->textInput() ?>

    <?php echo $form->field($model, 'maturity')->dropDownList([ 'Adult(18+' => 'Adult(18+', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'incident_place')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'incident_area')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'incident_province')->dropDownList([ 'Central Punjab' => 'Central Punjab', 'South Punjab' => 'South Punjab', 'Sindh' => 'Sindh', 'Balochistan' => 'Balochistan', 'KPK' => 'KPK', 'AJK' => 'AJK', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'incident_district')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'incident_city')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'attack_number')->textInput() ?>

    <?php echo $form->field($model, 'victim_number')->textInput() ?>

    <?php echo $form->field($model, 'victim_perpetrator')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'attack_reason')->textarea(['rows' => 6]) ?>
        <?php echo $form->field($model, 'allegated_number')->textInput() ?>

    <?php echo $form->field($model, 'allegated_names')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'contact_phone')->textInput(['maxlength' => true]) ?>
       
       
    <?php echo $form->field($model, 'birth_day')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', 11 => '11', 12 => '12', 13 => '13', 14 => '14', 15 => '15', 16 => '16', 17 => '17', 18 => '18', 19 => '19', 20 => '20', 21 => '21', 22 => '22', 23 => '23', 24 => '24', 25 => '25', 26 => '26', 27 => '27', 28 => '28', 29 => '29', 30 => '30', 31 => '31', ], ['prompt' => '']) ?>
       
</div>
       <div class="col-md-4">
    <?php echo $form->field($model, 'current_age')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'survivor_address')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'address_street')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'follow_up_visit')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'case_registered')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'lawyer_provided')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'panel_code_section')->dropDownList([ 302 => '302', 307 => '307', 324 => '324', 334 => '334', '336A' => '336A', '336B' => '336B', 337 => '337', '7-ata' => '7-ata', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'case_number')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'other_panel_section')->textInput(['maxlength' => true]) ?>
       <?php echo $form->field($model, 'asf_legel_support')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'follow_up_call')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'verdict_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'actual_perpetrator_different')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'actual_perpetrator')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'conviction_date')->textInput(['maxlength' => true]) ?>
    
     <?php echo $form->field($model, 'pictureFile')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'firFile')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'medicalFile')->textInput(['maxlength' => true]) ?>
       
       </div>
    </div>
    </div>
    <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Survivor Info</h3>
        </div>
    <div class="row">
    <div class="col-md-4">
 
    <?php echo $form->field($model, 'convicted')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'verdict')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'fir_number')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'lawyer_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'literate')->dropDownList([ 'No' => 'No', 'Primary' => 'Primary', 'Secondary' => 'Secondary', 'Higher' => 'Higher', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'fir_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'address_province')->dropDownList([ 'Central Punjab' => 'Central Punjab', 'South Punjab' => 'South Punjab', 'Sindh' => 'Sindh', 'Balochistan' => 'Balochistan', 'KPK' => 'KPK', 'AJK' => 'AJK', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'address_city')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'address_district')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'fir_registered')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'police_station')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'other_document')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'medical_legal_certificate')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'picture')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'fir')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>

   

   
    <?php echo $form->field($model, 'settlement_monetary')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'monetary_amount')->textInput(['maxlength' => true]) ?>
    </div>
   </div>
    </div>
    </div>
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
