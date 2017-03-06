<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Lookup;
/* @var $this yii\web\View */
/* @var $model common\models\InstallmentPlan */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="installment-plan-form custom-box">

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
        <?php echo $form->field($model, 'installment_plan_name')->textInput(['maxlength' => true]) ?>
        <?php echo $form->field($model, 'installment_plan_price')->textInput() ?>
        <?php echo $form->field($model, 'installment_downpayment_percentage')->textInput() ?>
        <?php echo $form->field($model, 'possession_charges')->textInput() ?>
        <?php echo $form->field($model, 'corner_charge')->textInput() ?>
        
        <?php echo $form->field($model, 'note')->textarea(['rows' => 2]) ?>



    <div class="form-group col-md-12">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
