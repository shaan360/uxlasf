<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorInfo */

$this->title = 'Update Asf Survivor Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Survivor Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-survivor-info-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
