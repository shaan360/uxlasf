<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Members */

$this->title = Yii::t('backend', 'Add {modelClass}', [
    'modelClass' => 'Member',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Members'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="members-create custom-box">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
