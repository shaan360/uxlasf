<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MemberShopsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Member Shops');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-shops-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('backend', 'Add {modelClass}', [
    'modelClass' => 'Member Shops',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options'=>['class'=>'custom-box'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'accountant_id',
            'member_id',
            'shop_no',
            'category',
            // 'payment_mode',
            // 'shop_size',
            // 'shop_prize',
            // 'shop_document',
            // 'status',
            // 'last_update',
            // 'timestamp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
