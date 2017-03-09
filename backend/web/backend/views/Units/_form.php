<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Units */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="units-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'unit_no')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'unit_type')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'floor')->textInput() ?>

    <?php echo $form->field($model, 'unit_map')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'status')->textInput() ?>

    <?php echo $form->field($model, 'last_update')->textInput() ?>

    <?php echo $form->field($model, 'timestamp')->textInput() ?>

    <?php echo $form->field($model, 'created_by')->textInput() ?>

    <?php echo $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'is_sold')->textInput() ?>

    <?php echo $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
