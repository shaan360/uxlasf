<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfHospital */

$this->title = 'Create Asf Hospital';
$this->params['breadcrumbs'][] = ['label' => 'Asf Hospitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-hospital-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
