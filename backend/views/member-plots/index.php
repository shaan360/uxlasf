<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberPlotsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Member Units');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-plots-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
<?php if(Yii::$app->user->can('user')&& !Yii::$app->user->can('administrator') && !Yii::$app->user->can('manager')){?>
    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=>['class'=>'custom-box'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           'id',
            //'accountant_id',
            //'member_id',
                            [
            'attribute' => 'unit_id',
            //'format' => 'html',
            'label' => 'Unit No',
            'value' => function ($model) {
             return $model->unit->unit_no;
        //['width' => '60px']);
            },
             ],    
            [
            'attribute' => 'unit_price',
            'format' => 'html',
            'label' => 'Unit Price',
            'value' => function ($model) {
             return $model->totalprice();
        //['width' => '60px']);
            },
             ],
             ['attribute' => 'date',
            'value' => 'date',
            'filter' => \yii\jui\DatePicker::widget(['language' => 'en', 'dateFormat' => 'yyyy-MM-dd','name'=>'date']),
            'format' => 'html',
            ],
            // 'last_update',
            // 'timestamp',
               
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{view}'
            ],
        ],
    ]); ?>
    
    <?php } else { ?>
     <p>
        <?php echo Html::a(Yii::t('backend', 'Purchase Unit', [
    'modelClass' => 'Member Plots',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=>['class'=>'custom-box'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'accountant_id',
            //'member_id',
            [
            'attribute' => 'name',
            'format' => 'html',
            'label' => 'Member Name',
            'value' => function ($model) {
             return $model->member->full_name;
        //['width' => '60px']);
            },
             ],
             
          
                         [
            'attribute' => 'unit_id',
            //'format' => 'html',
            'label' => 'Unit No',
            'value' => function ($model) {
             return $model->unit->unit_no;
        //['width' => '60px']);
            },
             ],    
            [
            'attribute' => 'unit_price',
            'format' => 'html',
            'label' => 'Unit Price',
            'value' => function ($model) {
             return $model->totalprice();
        //['width' => '60px']);
            },
             ],
             ['attribute' => 'date',
            'value' => 'date',
            'filter' => \yii\jui\DatePicker::widget(['language' => 'en', 'dateFormat' => 'yyyy-MM-dd','name'=>'date']),
            'format' => 'html',
            ],
          
                [
            'attribute' => 'status',
            'format' => 'html',
            //'class' => 'btn btn-success',
            'value' => function ($model) {
             if($model->status==1){
                 return "<a class='btn btn-success'>Approved<a>";
             }else{
                 return "<a class='btn btn-danger'>Pending<a>";
             };   
            }
             ],
            // 'last_update',
            // 'timestamp',
               
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php }?>
</div>
