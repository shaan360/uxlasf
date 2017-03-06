<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberPlotLedger */

$this->title = Yii::t('backend', 'Add {modelClass}', [
    'modelClass' => 'Unit Payment',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member unit Ledgers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-plot-ledger-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
