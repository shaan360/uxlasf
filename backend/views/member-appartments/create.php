<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberAppartments */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Member Appartments',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Appartments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-appartments-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
