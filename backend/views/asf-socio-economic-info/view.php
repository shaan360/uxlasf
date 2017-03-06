<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfSocioEconomicInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Socio Economic Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-socio-economic-info-view">

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
            'sen_education_support',
            'sen_vocational_training',
            'sen_job_placement',
            'sen_business_plan',
            'sen_entrepreneurship',
            'es_date',
            'es_project',
            'es_type',
            'jp_place',
            'jp_amount',
            'jp_project',
            'jp_date',
            'e_ship_date',
            'jp_type',
            'e_ship_type',
            'e_ship_amount',
            'e_ship_place',
            'bp_implementation_date',
            'e_ship_project',
            'vt_type',
            'vt_place',
            'vt_project',
            'vt_date',
            'es_amount',
            'vt_amount',
            'bp_date',
            'bp_amount',
            'bp_support_recommended',
            'bp_made_by',
            'bp_project',
            'bp_place',
            'comments_remarks:ntext',
        ],
    ]) ?>

</div>
