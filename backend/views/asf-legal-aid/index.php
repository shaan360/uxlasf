<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfLegalAidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Legal Aids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-legal-aid-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Legal Aid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'legal_id',
            'survivor_id',
            'asf_legal_input',
            'legal_support_date',
            'legal_project',
            // 'legal_followup',
            // 'legal_advice',
            // 'legal_lawyer_support',
            // 'legal_lawyer_name',
            // 'legal_lawyer_contact',
            // 'legal_police_investigation',
            // 'legal_prosecuted',
            // 'legal_court_case',
            // 'legal_court_name',
            // 'legal_court_place',
            // 'legal_judge_name',
            // 'legal_hearing',
            // 'legal_hearing_number',
            // 'legal_withdrawn_date',
            // 'legal_conviction',
            // 'legal_conviction_date',
            // 'legal_case_withdrawn',
            // 'comments_remarks:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
