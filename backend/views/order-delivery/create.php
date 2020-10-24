<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDelivery */

$this->title = 'Create Order Delivery';
$this->params['breadcrumbs'][] = ['label' => 'Order Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-delivery-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
