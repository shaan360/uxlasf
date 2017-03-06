<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSocioEconomicInfo */

$this->title = 'Update Asf Socio Economic Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Socio Economic Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-socio-economic-info-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
