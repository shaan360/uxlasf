<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfPsychologicalInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Psychological Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-psychological-info-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'survivor_id',
            'ncru_date',
            'ncru_evaluated',
            'ncru_project',
            'ncru_evaluated_by',
            'ncru_need_assistance',
            'ncru_urgent',
            'pe_date',
            'pe_evaluated',
            'pe_project',
            'pe_evaluated_by',
            'pe_contact',
            'pe_evaluated_at',
            'pe_psychological_issue',
            'pe_psychiatric_issue',
            'next_follow_date',
            'follow_required',
            'pe_further_assistance',
            'pe_diagnosis',
            'pe_within_weeks',
            'pe_recommended_date',
            'comments_remarks:ntext',
        ],
    ]) ?>

</div>
