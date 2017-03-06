<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Members */

$this->title = $model->full_name." Details";
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-view col-md-12 custom-box">
    <div class="col-md-8">
    <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
            'membership_number',
            'form_number',
            'first_name',
            'last_name',
            'full_name',
            'father_husband_name',
            'residential_address',
            'postal_address',
            'phone_office',
            'phone_residential',
            'mobile',
            'email:email',
            'occupation',
            'nationality',
            'dob',
            'cnic',
            'name_of_nominee',
            'relation',
            'address_of_nominee',
            'nominee_cnic',
            'application_date',
            'remarks',
        ],
    ]) ?>
    </div>
    <div class="col-md-4" style="text-align:center;">
        <div style="padding:20px;background:#f5f5f5;border:solid 1px #ccc;">
        <img style="width:100%;" src="<?= $model->photo_path."/".$model->photo ?>" />
        </div>
    </div>
    <div class="col-md-12">
         <label>Documents</label>
    <div class="col-md-12" style="border: solid 1px #ecf0f5;margin-bottom: 10px;">
        <div class="col-md-4">
       <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'application_document',
    //'url'=>$model->photo_path
    'value'=> Yii::$app->request->baseUrl."/images/docx-icon.png",
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?>
            <?php if (!empty($model->application_document)) { ?>
            <a class="btn btn-success"  href="<?= $model->photo_path ?>/<?= $model->application_document ?>"style="width: 128px;margin-left: 84px;" download>Download</a>
            <?php } ?>
        </div>
        <div class="col-md-4">
                       <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'member_photo',
    'value'=>$model->photo_path.'/'.$model->photo,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?>  
       <?php if (!empty($model->photo)) { ?>
                <a class="btn btn-success" href="<?= $model->photo_path ?>/<?= $model->photo ?>"style="width: 128px;margin-left: 84px;" download >Download</a>
            <?php } ?>    
        </div>
        <div class="col-md-4">
                        <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'member_cnic',
    'value'=>$model->photo_path.'/'.$model->member_cnic,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?>
            <?php if (!empty($model->member_cnic)) { ?>
                <a class="btn btn-success" href="<?= $model->photo_path ?>/<?= $model->member_cnic ?>"style="width: 128px;margin-left: 84px;" download>Download</a>
            <?php } ?>
        </div>
    </div>
         <div class="col-md-12"  style="border: solid 1px #ecf0f5;margin-bottom: 10px;">
        <div class="col-md-4">
                        <?php echo DetailView::widget([
        'model' => $model,
        'options'=>[
            'class'=>'custom-short-table',
        ],
        'attributes' => [
      [
    'attribute'=>'nominee_cnic_scan',
    'value'=>$model->photo_path.'/'.$model->nominee_cnic_scan,
    'format' => ['image',['width'=>'100','height'=>'100']],
    ]   
          
        ],
    ]) ?> 
            <?php if (!empty($model->nominee_cnic_scan)) { ?>
                <a class="btn btn-success" href="<?= $model->photo_path ?>/<?= $model->nominee_cnic_scan ?>" 
                   style="width: 128px;margin-left: 84px;" download>Download</a>
            <?php } ?>
        </div>
    </div>
        
    </div>
</div>
<div class="col-md-12 custom-box">
    <div class="widget-user">
        <?php if(Yii::$app->user->can('user') && !Yii::$app->user->can('manager') && !!Yii::$app->user->can('administrator')){?>
        <h2>My Units</h2>
        <?php }else{?>
        <h2><?php echo $model->first_name?> Units</h2>
        <?php }?>
            <?php echo GridView::widget([
        'dataProvider' => $model->plots,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'accountant_id',
            //'member_id',
          
                 [
            'attribute' => 'unit_id',
            'format' => 'html',
            'label' => 'Unit No',
            'value' => function ($model) {
             return $model->unit->unit_no;
        //['width' => '60px']);
            },
             ],
               [
            'attribute' => 'price',
            'format' => 'html',
            'label' => 'Price (PKR)',
            'value' => function ($model) {
             return $model->totalPrice();
            },
             ],
               [
            'attribute' => 'paid',
            'format' => 'html',
            'label' => 'Paid Unitll (PKR)',
            'value' => function ($model) {
             return $model->paymentTotal();
            },
             ],
              [
            'attribute' => 'balance',
            'format' => 'html',
            'label' => 'Balance (PKR)',
            'value' => function ($model) {
             return $model->totalPrice()-$model->paymentTotal();
            },
             ],
          
         
            // 'payment_mode',
            // 'plot_size',
            // 'plot_prize',
            // 'plot_document',
            // 'status',
            // 'last_update',
            // 'timestamp',
[
                   'class' => 'yii\grid\ActionColumn',
                   'buttons' => [
                       'view' => function ($url, $model) {
                           
                               return Html::a('<span class="fa fa-eye"></span>',Yii::$app->request->baseUrl . '/member-plots/view?id='.$model->id, [
                                           'title' => \Yii::t('yii', 'View Journal Entry'),
                                           'data-pjax' => '1',
                               ]);
                           },
                           'update' => function ($url, $model) {
                           
                               return Html::a('<span class="fa fa-pencil"></span>',Yii::$app->request->baseUrl . '/member-plots/update?id='.$model->id, [
                                           'title' => \Yii::t('yii', 'View Journal Entry'),
                                           'data-pjax' => '1',
                               ]);
                           },
                           'delete' => function ($url, $model) {
                           
                               return Html::a('<span class="fa fa-trash"></span>',Yii::$app->request->baseUrl .'/member-plots/delete?id='.$model->id, [
                                           'title' => \Yii::t('yii', 'View Journal Entry'),
                                           'data-pjax' => '1',
                               ]);
                           }
                       ],
                           'template' => '{view}{update}{delete}'
                       ],
        ],
    ]); ?>
    </div>
</div>
