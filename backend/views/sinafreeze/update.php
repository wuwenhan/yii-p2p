<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\sinapay\SinaFreeze */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Sina Freeze',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sina Freezes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sina-freeze-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
