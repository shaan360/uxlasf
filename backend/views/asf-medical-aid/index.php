<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfMedicalAidSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Medical Aids';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-medical-aid-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Medical Aid', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'survivor_id',
            'asf_medical_provided',
            'medical_aid_date',
            'project',
            // 'asf_nutrition_provided',
            // 'asf_nutrition_project',
            // 'asf_physiotherapy_provided',
            // 'asf_physiotherapy_project',
            // 'treatment_area',
            // 'assessment',
            // 'assessment_date',
            // 'procedure',
            // 'associated_procedure',
            // 'procedure_number',
            // 'assessment_number',
            // 'medicine',
            // 'medicine_expense',
            // 'doctor_name',
            // 'hospital_clinic_name',
            // 'asf_stayed_days',
            // 'ncru_discharge_date',
            // 'ncru_admission_date',
            // 'medical_follow_up',
            // 'days_at_hospital',
            // 'hospital_admission_date',
            // 'procedure_date',
            // 'hospital_discharge_date',
            // 'stay_at_ncru',
            // 'comments_remarks:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
