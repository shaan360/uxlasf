<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AsfLegalAid */

$this->title = 'Create Asf Legal Aid';
$this->params['breadcrumbs'][] = ['label' => 'Asf Legal Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-legal-aid-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
