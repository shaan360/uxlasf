<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfSocioEconomicInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Socio Economic Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-socio-economic-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Socio Economic Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'survivor_id',
            'ncru_date',
            'ncru_evaluated',
            'ncru_project',
            // 'ncru_evaluated_by',
            // 'ncru_need_assistance',
            // 'ncru_urgent',
            // 'sen_education_support',
            // 'sen_vocational_training',
            // 'sen_job_placement',
            // 'sen_business_plan',
            // 'sen_entrepreneurship',
            // 'es_date',
            // 'es_project',
            // 'es_type',
            // 'jp_place',
            // 'jp_amount',
            // 'jp_project',
            // 'jp_date',
            // 'e_ship_date',
            // 'jp_type',
            // 'e_ship_type',
            // 'e_ship_amount',
            // 'e_ship_place',
            // 'bp_implementation_date',
            // 'e_ship_project',
            // 'vt_type',
            // 'vt_place',
            // 'vt_project',
            // 'vt_date',
            // 'es_amount',
            // 'vt_amount',
            // 'bp_date',
            // 'bp_amount',
            // 'bp_support_recommended',
            // 'bp_made_by',
            // 'bp_project',
            // 'bp_place',
            // 'comments_remarks:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
