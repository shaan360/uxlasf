<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfViolenceType */

$this->title = 'Create Asf Violence Type';
$this->params['breadcrumbs'][] = ['label' => 'Asf Violence Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-violence-type-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
