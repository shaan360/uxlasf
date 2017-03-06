<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorDetailSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="asf-survivor-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'survivor_id') ?>

    <?php echo $form->field($model, 'victim_perpetrator_link') ?>

    <?php echo $form->field($model, 'victim_perpetrator_type') ?>

    <?php echo $form->field($model, 'birth_place') ?>

    <?php // echo $form->field($model, 'patient_profession') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'father_age') ?>

    <?php // echo $form->field($model, 'father_profession') ?>

    <?php // echo $form->field($model, 'father_address') ?>

    <?php // echo $form->field($model, 'father_city') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'telephone_number') ?>

    <?php // echo $form->field($model, 'mother_name') ?>

    <?php // echo $form->field($model, 'mother_age') ?>

    <?php // echo $form->field($model, 'mother_victim') ?>

    <?php // echo $form->field($model, 'multiple_mother_number') ?>

    <?php // echo $form->field($model, 'brother_number') ?>

    <?php // echo $form->field($model, 'sister_number') ?>

    <?php // echo $form->field($model, 'position_brother') ?>

    <?php // echo $form->field($model, 'house_room') ?>

    <?php // echo $form->field($model, 'rent_owned') ?>

    <?php // echo $form->field($model, 'house_structure') ?>

    <?php // echo $form->field($model, 'family_earning') ?>

    <?php // echo $form->field($model, 'marital_status') ?>

    <?php // echo $form->field($model, 'spouse_name') ?>

    <?php // echo $form->field($model, 'spouse_profession') ?>

    <?php // echo $form->field($model, 'spouse_address') ?>

    <?php // echo $form->field($model, 'spouse_city') ?>

    <?php // echo $form->field($model, 'spouse_number') ?>

    <?php // echo $form->field($model, 'patient_number_husband_multiple_marriage') ?>

    <?php // echo $form->field($model, 'family_joint_earning') ?>

    <?php // echo $form->field($model, 'bread_line') ?>

    <?php // echo $form->field($model, 'children_number') ?>

    <?php // echo $form->field($model, 'boys_number') ?>

    <?php // echo $form->field($model, 'boys_age') ?>

    <?php // echo $form->field($model, 'girls_number') ?>

    <?php // echo $form->field($model, 'girls_age') ?>

    <?php // echo $form->field($model, 'spouse_children_number') ?>

    <?php // echo $form->field($model, 'house_room_number') ?>

    <?php // echo $form->field($model, 'family_member_in_house') ?>

    <?php // echo $form->field($model, 'comments_remarks') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
