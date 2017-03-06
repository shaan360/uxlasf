<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfPerpetratorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Perpetrators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-perpetrator-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Perpetrator', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nlp_id',
            'perpetrator_type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
