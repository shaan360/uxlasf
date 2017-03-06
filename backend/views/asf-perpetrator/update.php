<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfPerpetrator */

$this->title = 'Update Asf Perpetrator: ' . ' ' . $model->nlp_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Perpetrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nlp_id, 'url' => ['view', 'id' => $model->nlp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-perpetrator-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
