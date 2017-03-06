<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfPsychologicalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Psychological Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-psychological-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Psychological Info', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'pe_date',
            // 'pe_evaluated',
            // 'pe_project',
            // 'pe_evaluated_by',
            // 'pe_contact',
            // 'pe_evaluated_at',
            // 'pe_psychological_issue',
            // 'pe_psychiatric_issue',
            // 'next_follow_date',
            // 'follow_required',
            // 'pe_further_assistance',
            // 'pe_diagnosis',
            // 'pe_within_weeks',
            // 'pe_recommended_date',
            // 'comments_remarks:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
