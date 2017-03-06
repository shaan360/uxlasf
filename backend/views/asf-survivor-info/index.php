<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfSurvivorInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Survivor Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-survivor-info-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Survivor Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'attack_id',
            'survivor_id',
            'accident_suicide',
            'survivor_stat',
            // 'asf_reported_day',
            // 'asf_reported_month',
            // 'asf_reported_mon',
            // 'asf_reported_year',
            // 'asf_assisted',
            // 'first_name',
            // 'middle_name',
            // 'last_name',
            // 'cnic_availible',
            // 'cnic',
            // 'gender',
            // 'incident_date',
            // 'before_year',
            // 'attacked_age',
            // 'maturity',
            // 'incident_place',
            // 'incident_area',
            // 'incident_province',
            // 'incident_district',
            // 'incident_city',
            // 'attack_number',
            // 'victim_number',
            // 'victim_perpetrator',
            // 'attack_reason:ntext',
            // 'allegated_number',
            // 'allegated_names',
            // 'contact_phone',
            // 'birth_day',
            // 'birth_month',
            // 'birth_year',
            // 'current_age',
            // 'survivor_address',
            // 'address_street',
            // 'follow_up_visit',
            // 'case_registered',
            // 'lawyer_provided',
            // 'panel_code_section',
            // 'case_number',
            // 'other_panel_section',
            // 'asf_legel_support',
            // 'follow_up_call',
            // 'verdict_date',
            // 'actual_perpetrator_different',
            // 'actual_perpetrator',
            // 'conviction_date',
            // 'convicted',
            // 'verdict',
            // 'fir_number',
            // 'lawyer_name',
            // 'literate',
            // 'fir_date',
            // 'address_province',
            // 'address_city',
            // 'address_district',
            // 'father_name',
            // 'fir_registered',
            // 'police_station',
            // 'other_document',
            // 'medical_legal_certificate',
            // 'picture',
            // 'fir',
            // 'comments_remarks:ntext',
            // 'pictureFile',
            // 'firFile',
            // 'medicalFile',
            // 'otherFile',
            // 'court_settlement',
            // 'settlement_agreement',
            // 'settlement_monetary',
            // 'monetary_amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
