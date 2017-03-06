<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorDetail */

$this->title = 'Update Asf Survivor Detail: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Survivor Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-survivor-detail-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
