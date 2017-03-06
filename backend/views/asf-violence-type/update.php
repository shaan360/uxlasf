<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfViolenceType */

$this->title = 'Update Asf Violence Type: ' . ' ' . $model->vt_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Violence Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vt_id, 'url' => ['view', 'id' => $model->vt_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-violence-type-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
