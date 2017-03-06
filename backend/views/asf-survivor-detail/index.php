<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AsfSurvivorDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asf Survivor Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asf-survivor-detail-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create Asf Survivor Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'survivor_id',
            'victim_perpetrator_link',
            'victim_perpetrator_type',
            'birth_place',
            // 'patient_profession',
            // 'religion',
            // 'father_age',
            // 'father_profession',
            // 'father_address',
            // 'father_city',
            // 'province',
            // 'telephone_number',
            // 'mother_name',
            // 'mother_age',
            // 'mother_victim',
            // 'multiple_mother_number',
            // 'brother_number',
            // 'sister_number',
            // 'position_brother',
            // 'house_room',
            // 'rent_owned',
            // 'house_structure',
            // 'family_earning',
            // 'marital_status',
            // 'spouse_name',
            // 'spouse_profession',
            // 'spouse_address',
            // 'spouse_city',
            // 'spouse_number',
            // 'patient_number_husband_multiple_marriage',
            // 'family_joint_earning',
            // 'bread_line',
            // 'children_number',
            // 'boys_number',
            // 'boys_age',
            // 'girls_number',
            // 'girls_age',
            // 'spouse_children_number',
            // 'house_room_number',
            // 'family_member_in_house',
            // 'comments_remarks:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
