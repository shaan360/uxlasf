<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShopLedger */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Member Shop Ledger',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Shop Ledgers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="member-shop-ledger-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
