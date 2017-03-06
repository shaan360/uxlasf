<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorDetail */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-survivor-detail-form">
    <div class="col-md-12">
    <?php $form = ActiveForm::begin(); ?>
    
    <?php echo $form->errorSummary($model); ?>
    </div>
    <div class="row">
    <div class="col-md-3 col-bottom-padding">
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
    <?php //echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>
    </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'victim_perpetrator_link')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => 'Select']) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'victim_perpetrator_type')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'birth_place')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'patient_profession')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'father_age')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'father_profession')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'father_address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'father_city')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'province')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'telephone_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'mother_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'mother_age')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'mother_victim')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'multiple_mother_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'brother_number')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'sister_number')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'position_brother')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'house_room')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'rent_owned')->dropDownList([ 'rent' => 'Rent', 'owned' => 'Owned', ], ['prompt' => 'Select']) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'house_structure')->dropDownList([ 'mud' => 'Mud', 'brick' => 'Brick', 'cement' => 'Cement', ], ['prompt' => 'Select']) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'family_earning')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'marital_status')->dropDownList([ 'Single' => 'Single', 'Married' => 'Married', 'Divorced' => 'Divorced', ], ['prompt' => 'Select']) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'spouse_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'spouse_profession')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'spouse_address')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'spouse_city')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'spouse_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'patient_number_husband_multiple_marriage')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'family_joint_earning')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'bread_line')->dropDownList([ 'above' => 'Above', 'below' => 'Below', ], ['prompt' => 'Select']) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'children_number')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'boys_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'boys_age')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'girls_number')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'girls_age')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'spouse_children_number')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'house_room_number')->textInput() ?>
        </div>
        <div class="col-md-3 col-bottom-padding">
    <?php echo $form->field($model, 'family_member_in_house')->textInput() ?>
        </div>
        <div class="col-md-6 col-bottom-padding">
    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
