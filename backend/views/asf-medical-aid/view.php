<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfMedicalAid */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Medical Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-medical-aid-view">

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
            'asf_medical_provided',
            'medical_aid_date',
            'project',
            'asf_nutrition_provided',
            'asf_nutrition_project',
            'asf_physiotherapy_provided',
            'asf_physiotherapy_project',
            'treatment_area',
            'assessment',
            'assessment_date',
            'procedure',
            'associated_procedure',
            'procedure_number',
            'assessment_number',
            'medicine',
            'medicine_expense',
            'doctor_name',
            'hospital_clinic_name',
            'asf_stayed_days',
            'ncru_discharge_date',
            'ncru_admission_date',
            'medical_follow_up',
            'days_at_hospital',
            'hospital_admission_date',
            'procedure_date',
            'hospital_discharge_date',
            'stay_at_ncru',
            'comments_remarks:ntext',
        ],
    ]) ?>

</div>
