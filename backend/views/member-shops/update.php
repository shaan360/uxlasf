<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MemberShops */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Member Shops',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Shops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="member-shops-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
