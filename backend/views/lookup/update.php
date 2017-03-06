<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lookup */

$this->title = 'Update Lookup: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lookups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lookup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>