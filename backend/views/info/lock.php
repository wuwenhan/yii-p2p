<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\asset\Info */

$this->title = Yii::t('app', '冻结资金: ', [
    'modelClass' => 'Info',
]) . ' ' . $model->member_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->member_id, 'url' => ['view', 'id' => $model->member_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="info-update">



    <?= $this->render('_newform', [
        'model' => $model,
    ]) ?>

</div>
