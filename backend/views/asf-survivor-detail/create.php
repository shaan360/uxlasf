<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorDetail */

$this->title = 'Add Asf Survivor Detail';
$this->params['breadcrumbs'][] = ['label' => 'Asf Survivor Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-survivor-detail-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
