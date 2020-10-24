<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MakeDelivery */

$this->title = 'Create Make Delivery';
$this->params['breadcrumbs'][] = ['label' => 'Make Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="make-delivery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
