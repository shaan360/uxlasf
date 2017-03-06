<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lookup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lookup-form">

    <?php $form = ActiveForm::begin(); ?>
   <?php echo $form->errorSummary($model); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => 200]) ?>
 <?= $form->field($model, 'code')->textInput(['maxlength' => 200]) ?>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
