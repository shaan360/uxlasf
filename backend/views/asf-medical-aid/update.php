<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfMedicalAid */

$this->title = 'Update Asf Medical Aid: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Medical Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-medical-aid-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
