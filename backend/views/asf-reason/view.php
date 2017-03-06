<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfReason */

$this->title = $model->nr_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Reasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-reason-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->nr_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->nr_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nr_id',
            'reason_type',
        ],
    ]) ?>

</div>
