<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfMedicalAid */

$this->title = 'Create Asf Medical Aid';
$this->params['breadcrumbs'][] = ['label' => 'Asf Medical Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-medical-aid-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
