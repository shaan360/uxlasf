<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfReasonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Reasons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-reason-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Reason', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nr_id',
            'reason_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
