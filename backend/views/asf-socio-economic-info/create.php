<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfSocioEconomicInfo */

$this->title = 'Add Asf Socio Economic Info';
$this->params['breadcrumbs'][] = ['label' => 'Asf Socio Economic Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-socio-economic-info-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
