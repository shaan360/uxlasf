<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfSurvivorInfo */

$this->title = 'Add Asf Survivor Info';
$this->params['breadcrumbs'][] = ['label' => 'Asf Survivor Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-survivor-info-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
