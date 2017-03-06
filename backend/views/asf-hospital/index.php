<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfHospitalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Hospitals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-hospital-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Hospital', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nhc_id',
            'hospital_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
