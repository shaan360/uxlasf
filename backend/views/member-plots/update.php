<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberPlots */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Plots',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Plots'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="member-plots-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
