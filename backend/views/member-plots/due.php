<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberPlotsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Member Payment Dues');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-plots-index">

    <div class="col-md-12" style="text-align: center;">
        <img src="<?php echo Yii::getAlias('@backendUrl') ?>/images/logo.png" />
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'options'=>['class'=>'custom-box'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
              [
                          'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default

                   'attribute' => 'name',
            'format' => 'html',
            'label' => 'Member name',
            'value' => function ($data) {
                return $data['name']; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
            [
                          'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default

                   'attribute' => 'unitno',
            'format' => 'html',
            'label' => 'Unit No',
            'value' => function ($data) {
                return $data['unitno']; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
            [
                          'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default

            'attribute' => 'overDays',
            'format' => 'html',
            'label' => 'Due in (Days)',
            'value' => function ($data) {
                return $data['overDays']; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
             [
                'class' => 'yii\grid\ActionColumn',
                   'buttons' => [
                       'view' => function ($url, $data) {
                           
                               return Html::a('<span class="fa fa-eye"></span>',Yii::$app->request->baseUrl . '/member-plots/view?id='.$data['unitid'], [
                                           'title' => \Yii::t('yii', 'View Details'),
                                           'data-pjax' => '1',
                               ]);
                           },
            ],
            'template' => '{view}'
  ],              
               
         ],
    ]); ?>
  
