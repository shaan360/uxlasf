<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorInfoSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-survivor-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'attack_id') ?>

    <?php echo $form->field($model, 'survivor_id') ?>

    <?php echo $form->field($model, 'accident_suicide') ?>

    <?php echo $form->field($model, 'survivor_stat') ?>

    <?php // echo $form->field($model, 'asf_reported_day') ?>

    <?php // echo $form->field($model, 'asf_reported_month') ?>

    <?php // echo $form->field($model, 'asf_reported_mon') ?>

    <?php // echo $form->field($model, 'asf_reported_year') ?>

    <?php // echo $form->field($model, 'asf_assisted') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'middle_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'cnic_availible') ?>

    <?php // echo $form->field($model, 'cnic') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'incident_date') ?>

    <?php // echo $form->field($model, 'before_year') ?>

    <?php // echo $form->field($model, 'attacked_age') ?>

    <?php // echo $form->field($model, 'maturity') ?>

    <?php // echo $form->field($model, 'incident_place') ?>

    <?php // echo $form->field($model, 'incident_area') ?>

    <?php // echo $form->field($model, 'incident_province') ?>

    <?php // echo $form->field($model, 'incident_district') ?>

    <?php // echo $form->field($model, 'incident_city') ?>

    <?php // echo $form->field($model, 'attack_number') ?>

    <?php // echo $form->field($model, 'victim_number') ?>

    <?php // echo $form->field($model, 'victim_perpetrator') ?>

    <?php // echo $form->field($model, 'attack_reason') ?>

    <?php // echo $form->field($model, 'allegated_number') ?>

    <?php // echo $form->field($model, 'allegated_names') ?>

    <?php // echo $form->field($model, 'contact_phone') ?>

    <?php // echo $form->field($model, 'birth_day') ?>

    <?php // echo $form->field($model, 'birth_month') ?>

    <?php // echo $form->field($model, 'birth_year') ?>

    <?php // echo $form->field($model, 'current_age') ?>

    <?php // echo $form->field($model, 'survivor_address') ?>

    <?php // echo $form->field($model, 'address_street') ?>

    <?php // echo $form->field($model, 'follow_up_visit') ?>

    <?php // echo $form->field($model, 'case_registered') ?>

    <?php // echo $form->field($model, 'lawyer_provided') ?>

    <?php // echo $form->field($model, 'panel_code_section') ?>

    <?php // echo $form->field($model, 'case_number') ?>

    <?php // echo $form->field($model, 'other_panel_section') ?>

    <?php // echo $form->field($model, 'asf_legel_support') ?>

    <?php // echo $form->field($model, 'follow_up_call') ?>

    <?php // echo $form->field($model, 'verdict_date') ?>

    <?php // echo $form->field($model, 'actual_perpetrator_different') ?>

    <?php // echo $form->field($model, 'actual_perpetrator') ?>

    <?php // echo $form->field($model, 'conviction_date') ?>

    <?php // echo $form->field($model, 'convicted') ?>

    <?php // echo $form->field($model, 'verdict') ?>

    <?php // echo $form->field($model, 'fir_number') ?>

    <?php // echo $form->field($model, 'lawyer_name') ?>

    <?php // echo $form->field($model, 'literate') ?>

    <?php // echo $form->field($model, 'fir_date') ?>

    <?php // echo $form->field($model, 'address_province') ?>

    <?php // echo $form->field($model, 'address_city') ?>

    <?php // echo $form->field($model, 'address_district') ?>

    <?php // echo $form->field($model, 'father_name') ?>

    <?php // echo $form->field($model, 'fir_registered') ?>

    <?php // echo $form->field($model, 'police_station') ?>

    <?php // echo $form->field($model, 'other_document') ?>

    <?php // echo $form->field($model, 'medical_legal_certificate') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'fir') ?>

    <?php // echo $form->field($model, 'comments_remarks') ?>

    <?php // echo $form->field($model, 'pictureFile') ?>

    <?php // echo $form->field($model, 'firFile') ?>

    <?php // echo $form->field($model, 'medicalFile') ?>

    <?php // echo $form->field($model, 'otherFile') ?>

    <?php // echo $form->field($model, 'court_settlement') ?>

    <?php // echo $form->field($model, 'settlement_agreement') ?>

    <?php // echo $form->field($model, 'settlement_monetary') ?>

    <?php // echo $form->field($model, 'monetary_amount') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
