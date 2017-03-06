<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfProject */

$this->title = 'Update Asf Project: ' . ' ' . $model->np_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->np_id, 'url' => ['view', 'id' => $model->np_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-project-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
