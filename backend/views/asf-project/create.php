<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfProject */

$this->title = 'Create Asf Project';
$this->params['breadcrumbs'][] = ['label' => 'Asf Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-project-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
