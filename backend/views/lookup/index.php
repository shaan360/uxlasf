<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LookupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lookups';
$this->params['breadcrumbs'][] = $this->title;
?>
  <p>
        <?= Html::a('<i class="fa fa-plus"></i> Add Look Up', ['create'], ['class' => 'btn btn-default']) ?>
    </p>
<div class="lookup-index box">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'code',
            'name',
          'type',
            //'position',

             ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
