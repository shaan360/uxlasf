<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\InstallmentPlan */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Installment Plan',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Installment Plans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="installment-plan-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
