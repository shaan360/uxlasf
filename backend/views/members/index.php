<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MembersPlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Members');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-index custom-box">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('backend', 'Add {modelClass}', [
    'modelClass' => 'Members',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=>['class'=>'custom-box'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
           [
            'attribute' => 'photo',
            'format' => 'html',
            'label' => 'Photo',
            'value' => function ($data) {
                return Html::img($data['photo_path'].'/' . $data['photo'],
                    ['width' => '60px']);
            },
             ],
            'membership_number',
            //'application_document',
            //'form_number',
            //'first_name',
            // 'last_name',
             'full_name', 
            
            // 'father_husband_name',
            // 'postal_address',
            // 'residential_address',
            // 'phone_office',
            // 'phone_residential',
            'mobile',
            // 'email:email',
            // 'occupation',
            // 'nationality',
            // 'dob',
            // 'cnic',
            // 'member_cnic',
            // 'name_of_nominee',
            // 'relation',
            // 'address_of_nominee',
            // 'nominee_cnic',
            // 'nominee_cnic_scan',
            // 'application_date',
            // 'password',
            // 'remarks',
            // 'active_key',
            // 'is_blocked',
            // 'status',
            // 'last_login',
            // 'last_modified',
            // 'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
