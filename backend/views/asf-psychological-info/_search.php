<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfPsychologicalInfoSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-psychological-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'survivor_id') ?>

    <?php echo $form->field($model, 'ncru_date') ?>

    <?php echo $form->field($model, 'ncru_evaluated') ?>

    <?php echo $form->field($model, 'ncru_project') ?>

    <?php // echo $form->field($model, 'ncru_evaluated_by') ?>

    <?php // echo $form->field($model, 'ncru_need_assistance') ?>

    <?php // echo $form->field($model, 'ncru_urgent') ?>

    <?php // echo $form->field($model, 'pe_date') ?>

    <?php // echo $form->field($model, 'pe_evaluated') ?>

    <?php // echo $form->field($model, 'pe_project') ?>

    <?php // echo $form->field($model, 'pe_evaluated_by') ?>

    <?php // echo $form->field($model, 'pe_contact') ?>

    <?php // echo $form->field($model, 'pe_evaluated_at') ?>

    <?php // echo $form->field($model, 'pe_psychological_issue') ?>

    <?php // echo $form->field($model, 'pe_psychiatric_issue') ?>

    <?php // echo $form->field($model, 'next_follow_date') ?>

    <?php // echo $form->field($model, 'follow_required') ?>

    <?php // echo $form->field($model, 'pe_further_assistance') ?>

    <?php // echo $form->field($model, 'pe_diagnosis') ?>

    <?php // echo $form->field($model, 'pe_within_weeks') ?>

    <?php // echo $form->field($model, 'pe_recommended_date') ?>

    <?php // echo $form->field($model, 'comments_remarks') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
