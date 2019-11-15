<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuba */

$this->title = Yii::t('app', 'Update Cuba: {name}', [
    'name' => $model->idrec,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cubas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idrec, 'url' => ['view', 'id' => $model->idrec]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cuba-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
