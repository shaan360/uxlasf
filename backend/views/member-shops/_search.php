<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShopsSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-shops-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'accountant_id') ?>

    <?php echo $form->field($model, 'member_id') ?>

    <?php echo $form->field($model, 'shop_no') ?>

    <?php echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'payment_mode') ?>

    <?php // echo $form->field($model, 'shop_size') ?>

    <?php // echo $form->field($model, 'shop_prize') ?>

    <?php // echo $form->field($model, 'shop_document') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
