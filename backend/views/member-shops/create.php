<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MemberShops */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Member Shops',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Member Shops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-shops-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
