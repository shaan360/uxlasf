<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfReason */

$this->title = 'Create Asf Reason';
$this->params['breadcrumbs'][] = ['label' => 'Asf Reasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-reason-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
