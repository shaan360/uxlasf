<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use trntv\yii\datetime\DateTimeWidget;
use kartik\date\DatePicker;
use common\models\Lookup;

/* @var $this yii\web\View */
/* @var $model common\models\Members */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="members-form col-md-12">
    <div class="col-md-12">
        <div class="controls">
            <p class="help-block"><strong>Note:</strong> If Member already added,just add property details.</p>
        </div>
    </div>
    <?php $form = ActiveForm::begin(['options' => ['class' => 'inline-input-form']]); ?>
    <div class="col-md-12">
        <?php echo $form->errorSummary($model); ?>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'membership_number')->textInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'form_number')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'father_husband_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'postal_address')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'residential_address')->textarea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'phone_office')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'phone_residential')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
       <?php 
echo $form->field($model, 'dob')->widget(DatePicker::classname(), [
"options" => ["placeholder" => "Date of birth ..."],
"id" => "dob",
 'type' => DatePicker::TYPE_INPUT,
//"type" => DatePicker::TYPE_COMPONENT_PREPEND,
"pluginOptions" => [
"format" => "yyyy-mm-dd",
"autoclose"=>true,
]]);?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'nationality')->textInput(['maxlength' => true, 'value' => 'Pakistan']) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'cnic')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'name_of_nominee')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'address_of_nominee')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'nominee_cnic')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="col-md-12" style="
    padding-bottom: 24px;
">
        <div class="col-md-6">
            
            
    <?php 
echo $form->field($model, 'application_date')->widget(DatePicker::classname(), [
"options" => ["placeholder" => "Date of application ..."],
"id" => "application_date",
 'type' => DatePicker::TYPE_INPUT,
"pluginOptions" => [
"format" => "yyyy-mm-dd",
"autoclose"=>true,
]]);?>
       
        </div>
        <div class="col-md-6">
<?= $form->field($model, 'status')->dropDownList(Lookup::items('poststatus'), ['prompt' => 'Select Status']) ?>
          
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
         <?= $form->field($model, 'member_type')->dropDownList(Lookup::items('member_type'), ['prompt' => 'Select Type']) ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <?php echo $form->field($model, 'remarks')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">

            
        </div>
    </div>
    <label>Documents</label>
    <div class="col-md-12" style="border: solid 1px #ecf0f5;margin-bottom: 10px;">
     
        <div class="col-md-4">
            <?php
            echo $form->field($model, 'pic')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload'],
                
            ]);
            ?>
            <?php //echo $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $form->field($model, 'pic3')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $form->field($model, 'pic4')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload']
            ]);
            ?>
        </div>
           <div class="col-md-4">
            <?php
            echo $form->field($model, 'pic2')->widget(\trntv\filekit\widget\Upload::classname(), [
                'url' => ['photo-upload'],
                'url' => ['/file-storage/upload'],
                'sortable' => true,
                'maxFileSize' => 10000000, // 10 MiB
                'maxNumberOfFiles' => 1
                
            ]);
            ?>
        </div>
    </div>

    <div class="col-md-12">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Submit') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
