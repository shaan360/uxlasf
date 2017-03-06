<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UnitsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="units-index custom-box">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Add Unit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'unit_no',
            'size',
            'no_beds',
              [
                'attribute'=>'unit_type',
                'value'=>function ($model) {
                    return \common\models\Lookup::item('unit_type',$model->unit_type);
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Lookup::find()->where(['type'=>'unit_type'])->all(), 'id', 'name')

            ],
               [
                'attribute'=>'category',
                'value'=>function ($model) {
                    return \common\models\Lookup::item('category',$model->category);
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Lookup::find()->where(['type'=>'category'])->all(), 'id', 'name')

            ],
              [
                'attribute'=>'floor',
                'value'=>function ($model) {
                    return \common\models\Lookup::item('floors',$model->floor);
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Lookup::find()->where(['type'=>'floors'])->all(), 'id', 'name')

            ],
              [
                'attribute'=>'is_sold',
                'value'=>function ($model) {
                    return \common\models\Lookup::item('is_sold',$model->is_sold);
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\common\models\Lookup::find()->where(['type'=>'is_sold'])->all(), 'id', 'name')

            ],
            // 'unit_map',
            // 'status',
            // 'last_update',
            // 'timestamp',
            // 'created_by',
            // 'updated_by',
            
            // 'comments:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
