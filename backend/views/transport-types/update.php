<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TransportTypes */

$this->title = 'Update Transport Types: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Transport Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transport-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
