<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfPerpetrator */

$this->title = $model->nlp_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Perpetrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-perpetrator-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->nlp_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->nlp_id], [
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
            'nlp_id',
            'perpetrator_type',
        ],
    ]) ?>

</div>
