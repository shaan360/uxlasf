<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfProject */

$this->title = $model->np_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-project-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->np_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->np_id], [
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
            'np_id',
            'project_type',
        ],
    ]) ?>

</div>
