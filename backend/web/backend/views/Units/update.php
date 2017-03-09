<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Units */

$this->title = 'Update Units: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="units-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
