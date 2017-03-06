<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AsfPsychologicalInfo */

$this->title = 'Update Asf Psychological Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Psychological Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asf-psychological-info-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
