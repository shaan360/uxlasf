<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfPsychologicalInfo */

$this->title = 'Add Asf Psychological Info';
$this->params['breadcrumbs'][] = ['label' => 'Asf Psychological Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-psychological-info-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
