<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-survivor-info-form">
    <div class="col-md-12">
    <?php $form = ActiveForm::begin(); ?>
         <?php echo $form->errorSummary($model); ?>
    </div>
     <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Survivor Info</h3>
        </div>
    <div class="row">
   
      <div class="col-md-4 col-bottom-padding">
    <?php echo $form->field($model, 'attack_id')->textInput(['maxlength' => true]) ?>
       
    <?php echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>
     
         
    <?=  $form->field($model, 'accident_suicide')->dropDownList(common\models\Lookup::items('accident'), ['prompt' => 'Select']) ?> 
    
    <?php echo $form->field($model, 'survivor_stat')->dropDownList([ 'Dead' => 'Dead', 'Alive' => 'Alive', ], ['prompt' => 'Select']) ?>

   <label class="control-label" for="member-plot-date">Reported Date</label>  
        <?=
        DatePicker::widget([
            'name' => 'asf_reported_day',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->asf_reported_day,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                
            ]
        ])
        ?>
         
        
     <?= $form->field($model, 'asf_assisted')->dropDownList(common\models\Lookup::items('yesNo'), ['prompt' => 'Select']) ?>
    
        
    
    <?php echo $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
         
    <?php echo $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
 
    <?php echo $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
         
    <?php echo $form->field($model, 'cnic_availible')->dropDownList(['yes' => 'Yes','no'=>'No'],['prompt'=>'Select']) ?>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'cnic')->textInput() ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'gender')->dropDownList([ 'male' => 'Male', 'female' => 'Female', 'other' => 'Other', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
             <label class="control-label" for="dob">Incident Date</label>      
            <?=
        DatePicker::widget([
            'name' => 'incident_date',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->incident_date,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd/mm/yyyy',
                
            ]
        ])
        ?>  
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'before_year')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'attacked_age')->textInput() ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'maturity')->dropDownList([ 'Adult(18+)' => 'Adult(18+)','Minor(-17)' => 'Minor(-17)' ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'incident_place')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'incident_area')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'incident_province')->dropDownList([ 'Central Punjab' => 'Central Punjab', 'South Punjab' => 'South Punjab', 'Sindh' => 'Sindh', 'Balochistan' => 'Balochistan', 'KPK' => 'KPK', 'AJK' => 'AJK', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'incident_district')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'incident_city')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'attack_number')->textInput() ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'victim_number')->textInput() ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'victim_perpetrator')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
             
             <?php echo $form->field($model, 'monetary_amount')->textInput(['maxlength' => true]) ?>
    
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'allegated_number')->textInput() ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'allegated_names')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'contact_phone')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
        <label class="control-label" for="dob">Date Of Birth</label>      
            <?=
        DatePicker::widget([
            'name' => 'birth_day',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->birth_day,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                
            ]
        ])
        ?>    
             
       </div>
      
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'current_age')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'survivor_address')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'address_street')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'follow_up_visit')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'case_registered')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'lawyer_provided')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'panel_code_section')->dropDownList([ 302 => '302', 307 => '307', 324 => '324', 334 => '334', '336A' => '336A', '336B' => '336B', 337 => '337', '7-ata' => '7-ata', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'case_number')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'other_panel_section')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'asf_legel_support')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'follow_up_call')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
                  <label class="control-label" for="dob">Verdict Date</label>      
            <?=
        DatePicker::widget([
            'name' => 'incident_date',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->verdict_date,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd/mm/yyyy',
                
            ]
        ])
        ?>     
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'actual_perpetrator_different')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'actual_perpetrator')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
                    <label class="control-label" for="dob">Conviction Date</label>      
            <?=
        DatePicker::widget([
            'name' => 'conviction_date',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->conviction_date,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd/mm/yyyy',
                
            ]
        ])
        ?> 
         </div>
        <div class="col-md-3 col-bottom-padding"></div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'convicted')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'verdict')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'fir_number')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'lawyer_name')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'literate')->dropDownList([ 'No' => 'No', 'Primary' => 'Primary', 'Secondary' => 'Secondary', 'Higher' => 'Higher', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
                       <label class="control-label" for="dob">FIR Date</label>      
            <?=
        DatePicker::widget([
            'name' => 'fir_date',
            'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            'type' => DatePicker::TYPE_INPUT,
            'value' => $model->fir_date,
            'options' => ['placeholder' => 'Select Date ...'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd/mm/yyyy',
                
            ]
        ])
        ?>      
        </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'address_province')->dropDownList([ 'Central Punjab' => 'Central Punjab', 'South Punjab' => 'South Punjab', 'Sindh' => 'Sindh', 'Balochistan' => 'Balochistan', 'KPK' => 'KPK', 'AJK' => 'AJK', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'address_city')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'address_district')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'fir_registered')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'police_station')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'other_document')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'medical_legal_certificate')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
       
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'court_settlement')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'settlement_agreement')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'settlement_monetary')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
          <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'picture')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'fir')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
         </div>
    </div>
      </div>
        <div class="row"> 
         <div class="col-md-3 col-bottom-padding">
             <?php
            echo $form->field($model, 'pic')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?>   
    <?php //echo $form->field($model, 'pictureFile')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
      <?php
            echo $form->field($model, 'pic2')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?>         
    <?php //echo $form->field($model, 'firFile')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
             <?php
            echo $form->field($model, 'pic3')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?>    
    <?php //echo $form->field($model, 'medicalFile')->textInput(['maxlength' => true]) ?>
         </div>
         <div class="col-md-3 col-bottom-padding">
                <?php
            echo $form->field($model, 'pic4')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?> 
    <?php //echo $form->field($model, 'otherFile')->textInput(['maxlength' => true]) ?>
         </div>
        </div>
    <div class="row"> 
        <div class="col-md-6 col-bottom-padding">
    <?php echo $form->field($model, 'attack_reason')->textarea(['rows' => 6]) ?>
         </div> 
        <div class="col-md-6 col-bottom-padding">
    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>
         </div>
        
        <br>
    </div>
        <div class="row"> 
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
        </div>
    <?php ActiveForm::end(); ?>

</div>
</div>