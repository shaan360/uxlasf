<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfLegalAid */

$this->title = 'Update Asf Legal Aid: ' . ' ' . $model->legal_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Legal Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->legal_id, 'url' => ['view', 'id' => $model->legal_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-legal-aid-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
