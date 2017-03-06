<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfReason */

$this->title = 'Update Asf Reason: ' . ' ' . $model->nr_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Reasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nr_id, 'url' => ['view', 'id' => $model->nr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-reason-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
