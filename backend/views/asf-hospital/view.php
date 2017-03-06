<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfHospital */

$this->title = $model->nhc_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Hospitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-hospital-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->nhc_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->nhc_id], [
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
            'nhc_id',
            'hospital_type',
        ],
    ]) ?>

</div>
