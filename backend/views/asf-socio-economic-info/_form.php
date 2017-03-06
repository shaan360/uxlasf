<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSocioEconomicInfo */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-socio-economic-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'survivor_id')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_evaluated')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_evaluated_by')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'ncru_need_assistance')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'ncru_urgent')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'sen_education_support')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'sen_vocational_training')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'sen_job_placement')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'sen_business_plan')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'sen_entrepreneurship')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?php echo $form->field($model, 'es_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'es_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'es_type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'jp_place')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'jp_amount')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'jp_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'jp_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'e_ship_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'jp_type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'e_ship_type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'e_ship_amount')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'e_ship_place')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_implementation_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'e_ship_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'vt_type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'vt_place')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'vt_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'vt_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'es_amount')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'vt_amount')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_date')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_amount')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_support_recommended')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_made_by')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_project')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'bp_place')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'comments_remarks')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
