<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
use common\models\Lookup;
/* @var $this yii\web\View */
/* @var $model common\models\Units */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-plots-form col-md-12 custom-box">

      <?php $form = ActiveForm::begin(['layout' => 'horizontal',
       'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
             'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
        ],
    ],
       ]); ?>
<div class="col-md-12">
    <?php echo $form->errorSummary($model); ?>
</div>
    <div class="col-md-5 col-bottom-padding">
    <?php echo $form->field($model, 'unit_no')->textInput(['maxlength' => true]) ?>
   <?php echo $form->field($model, 'size')->textInput(['maxlength' => true])->hint('Area(sft)') ?>
   <?php echo $form->field($model, 'no_beds')->textInput(['maxlength' => true]) ?>
    
    </div>
    
  <div class="col-md-5 col-bottom-padding">
 <?= $form->field($model, 'category')->dropDownList(Lookup::items('category'), ['prompt' => 'Select']) ?>
<?= $form->field($model, 'unit_type')->dropDownList(Lookup::items('unit_type'), ['prompt' => 'Select']) ?>
<?= $form->field($model, 'floor')->dropDownList(Lookup::items('floors'), ['prompt' => 'Select']) ?>
<?= $form->field($model, 'is_sold')->dropDownList(Lookup::items('is_sold'), ['prompt' => 'Select...']) ?>            
</div>
 

    <div class="col-md-5 col-bottom-padding">
    <?php echo $form->field($model, 'comments')->textarea(['rows' => 3]) ?>
    </div>
    <div class="col-md-12 col-bottom-padding"></div>
    <div class="form-group col-md-10">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
