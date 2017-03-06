<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberApartmentLedger */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Member Apartment Ledger',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Apartment Ledgers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-apartment-ledger-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
