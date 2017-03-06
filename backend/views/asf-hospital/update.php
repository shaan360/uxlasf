<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfHospital */

$this->title = 'Update Asf Hospital: ' . ' ' . $model->nhc_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Hospitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nhc_id, 'url' => ['view', 'id' => $model->nhc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-hospital-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
