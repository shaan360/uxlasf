<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfLegalAidSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-legal-aid-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'legal_id') ?>

    <?php echo $form->field($model, 'survivor_id') ?>

    <?php echo $form->field($model, 'asf_legal_input') ?>

    <?php echo $form->field($model, 'legal_support_date') ?>

    <?php echo $form->field($model, 'legal_project') ?>

    <?php // echo $form->field($model, 'legal_followup') ?>

    <?php // echo $form->field($model, 'legal_advice') ?>

    <?php // echo $form->field($model, 'legal_lawyer_support') ?>

    <?php // echo $form->field($model, 'legal_lawyer_name') ?>

    <?php // echo $form->field($model, 'legal_lawyer_contact') ?>

    <?php // echo $form->field($model, 'legal_police_investigation') ?>

    <?php // echo $form->field($model, 'legal_prosecuted') ?>

    <?php // echo $form->field($model, 'legal_court_case') ?>

    <?php // echo $form->field($model, 'legal_court_name') ?>

    <?php // echo $form->field($model, 'legal_court_place') ?>

    <?php // echo $form->field($model, 'legal_judge_name') ?>

    <?php // echo $form->field($model, 'legal_hearing') ?>

    <?php // echo $form->field($model, 'legal_hearing_number') ?>

    <?php // echo $form->field($model, 'legal_withdrawn_date') ?>

    <?php // echo $form->field($model, 'legal_conviction') ?>

    <?php // echo $form->field($model, 'legal_conviction_date') ?>

    <?php // echo $form->field($model, 'legal_case_withdrawn') ?>

    <?php // echo $form->field($model, 'comments_remarks') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
