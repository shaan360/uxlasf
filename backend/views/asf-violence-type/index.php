<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfViolenceTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Violence Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-violence-type-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Violence Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vt_id',
            'violence_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
