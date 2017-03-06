<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberAppartments */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Member Appartments',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Appartments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="member-appartments-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
