<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfPerpetrator */

$this->title = 'Create Asf Perpetrator';
$this->params['breadcrumbs'][] = ['label' => 'Asf Perpetrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-perpetrator-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
