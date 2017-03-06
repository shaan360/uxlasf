<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Lookup;
/* @var $this yii\web\View */
/* @var $model common\models\UnitsSearch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="units-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<div class="col-md-5 col-bottom-padding">
    <?php echo $form->field($model, 'unit_no') ?>

<?= $form->field($model, 'unit_type')->dropDownList(Lookup::items('unit_type'), ['prompt' => 'Select Select']) ?>
<?= $form->field($model, 'floor')->dropDownList(Lookup::items('floors'), ['prompt' => 'Select Select']) ?>
</div>
<div class="col-md-5 col-bottom-padding">
<?= $form->field($model, 'category')->dropDownList(Lookup::items('category'), ['prompt' => 'Select Select']) ?>
<?= $form->field($model, 'is_sold')->dropDownList(Lookup::items('yesNo'), ['prompt' => 'Select Select']) ?>
 <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

</div>

    
    <?php ActiveForm::end(); ?>

</div>
<div class="clearfix"></div>
