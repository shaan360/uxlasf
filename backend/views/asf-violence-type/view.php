<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfViolenceType */

$this->title = $model->vt_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Violence Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-violence-type-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->vt_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->vt_id], [
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
            'vt_id',
            'violence_type',
        ],
    ]) ?>

</div>
