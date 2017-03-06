<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfPsychologicalInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-psychological-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_evaluated')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'ncru_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_evaluated_by')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_need_assistance')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'ncru_urgent')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'pe_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_evaluated')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'pe_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_evaluated_by')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_contact')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_evaluated_at')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_psychological_issue')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'pe_psychiatric_issue')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'next_follow_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'follow_required')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'pe_further_assistance')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'pe_diagnosis')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_within_weeks')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pe_recommended_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
