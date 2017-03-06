<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AsfLegalAid */

$this->title = $model->legal_id;
$this->params['breadcrumbs'][] = ['label' => 'Asf Legal Aids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-legal-aid-view">

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->legal_id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->legal_id], [
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
            'legal_id',
            'survivor_id',
            'asf_legal_input',
            'legal_support_date',
            'legal_project',
            'legal_followup',
            'legal_advice',
            'legal_lawyer_support',
            'legal_lawyer_name',
            'legal_lawyer_contact',
            'legal_police_investigation',
            'legal_prosecuted',
            'legal_court_case',
            'legal_court_name',
            'legal_court_place',
            'legal_judge_name',
            'legal_hearing',
            'legal_hearing_number',
            'legal_withdrawn_date',
            'legal_conviction',
            'legal_conviction_date',
            'legal_case_withdrawn',
            'comments_remarks:ntext',
        ],
    ]) ?>

</div>
