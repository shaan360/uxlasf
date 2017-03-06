<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSocioEconomicInfoSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-socio-economic-info-search">

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

    <?php // echo $form->field($model, 'sen_education_support') ?>

    <?php // echo $form->field($model, 'sen_vocational_training') ?>

    <?php // echo $form->field($model, 'sen_job_placement') ?>

    <?php // echo $form->field($model, 'sen_business_plan') ?>

    <?php // echo $form->field($model, 'sen_entrepreneurship') ?>

    <?php // echo $form->field($model, 'es_date') ?>

    <?php // echo $form->field($model, 'es_project') ?>

    <?php // echo $form->field($model, 'es_type') ?>

    <?php // echo $form->field($model, 'jp_place') ?>

    <?php // echo $form->field($model, 'jp_amount') ?>

    <?php // echo $form->field($model, 'jp_project') ?>

    <?php // echo $form->field($model, 'jp_date') ?>

    <?php // echo $form->field($model, 'e_ship_date') ?>

    <?php // echo $form->field($model, 'jp_type') ?>

    <?php // echo $form->field($model, 'e_ship_type') ?>

    <?php // echo $form->field($model, 'e_ship_amount') ?>

    <?php // echo $form->field($model, 'e_ship_place') ?>

    <?php // echo $form->field($model, 'bp_implementation_date') ?>

    <?php // echo $form->field($model, 'e_ship_project') ?>

    <?php // echo $form->field($model, 'vt_type') ?>

    <?php // echo $form->field($model, 'vt_place') ?>

    <?php // echo $form->field($model, 'vt_project') ?>

    <?php // echo $form->field($model, 'vt_date') ?>

    <?php // echo $form->field($model, 'es_amount') ?>

    <?php // echo $form->field($model, 'vt_amount') ?>

    <?php // echo $form->field($model, 'bp_date') ?>

    <?php // echo $form->field($model, 'bp_amount') ?>

    <?php // echo $form->field($model, 'bp_support_recommended') ?>

    <?php // echo $form->field($model, 'bp_made_by') ?>

    <?php // echo $form->field($model, 'bp_project') ?>

    <?php // echo $form->field($model, 'bp_place') ?>

    <?php // echo $form->field($model, 'comments_remarks') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
