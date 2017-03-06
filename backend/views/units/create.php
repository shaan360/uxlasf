<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Units */

$this->title = 'Create Units';
$this->params['breadcrumbs'][] = ['label' => 'Units', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
