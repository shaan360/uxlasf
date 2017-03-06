<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MembersPlanSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="members-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'membership_number') ?>

    <?php echo $form->field($model, 'application_document') ?>

    <?php echo $form->field($model, 'form_number') ?>

    <?php echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'full_name') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'father_husband_name') ?>

    <?php // echo $form->field($model, 'postal_address') ?>

    <?php // echo $form->field($model, 'residential_address') ?>

    <?php // echo $form->field($model, 'phone_office') ?>

    <?php // echo $form->field($model, 'phone_residential') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'cnic') ?>

    <?php // echo $form->field($model, 'member_cnic') ?>

    <?php // echo $form->field($model, 'name_of_nominee') ?>

    <?php // echo $form->field($model, 'relation') ?>

    <?php // echo $form->field($model, 'address_of_nominee') ?>

    <?php // echo $form->field($model, 'nominee_cnic') ?>

    <?php // echo $form->field($model, 'nominee_cnic_scan') ?>

    <?php // echo $form->field($model, 'application_date') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'active_key') ?>

    <?php // echo $form->field($model, 'is_blocked') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'last_login') ?>

    <?php // echo $form->field($model, 'last_modified') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
