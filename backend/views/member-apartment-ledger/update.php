<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberApartmentLedger */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Member Apartment Ledger',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Apartment Ledgers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="member-apartment-ledger-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
