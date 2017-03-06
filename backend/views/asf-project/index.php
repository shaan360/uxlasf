<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-project-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'np_id',
            'project_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
