<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShopLedgerSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="member-shop-ledger-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>

    <?php echo $form->field($model, 'accountant_id') ?>

    <?php echo $form->field($model, 'member_id') ?>

    <?php echo $form->field($model, 'shop_id') ?>

    <?php echo $form->field($model, 'date_as_on') ?>

    <?php // echo $form->field($model, 'particulars') ?>

    <?php // echo $form->field($model, 'society_receipt') ?>

    <?php // echo $form->field($model, 'payable_outstanding') ?>

    <?php // echo $form->field($model, 'payment_received') ?>

    <?php // echo $form->field($model, 'balance_outstanding') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'last_modified') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
