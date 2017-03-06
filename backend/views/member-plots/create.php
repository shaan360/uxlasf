<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberPlots */

$this->title = Yii::t('backend', 'Purchase order', [
    'modelClass' => 'Plots',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Unit'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-plots-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
