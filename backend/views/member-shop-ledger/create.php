<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberShopLedger */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Member Shop Ledger',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Shop Ledgers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-shop-ledger-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
