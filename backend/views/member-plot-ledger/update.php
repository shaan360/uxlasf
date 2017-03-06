<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberPlotLedger */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Member Plot Ledger',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Plot Ledgers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="member-plot-ledger-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
