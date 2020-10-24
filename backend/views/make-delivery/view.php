<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MakeDelivery */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Make Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="make-delivery-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'from_address',
            'to_address',
            'date',
            [
                'attribute' => 'transport_type_id',
                'value' => $model->transportType->title
            ],
            'on_road_task',
            [
                'attribute' => 'type',
                'value' => \backend\models\Delivery::$delivery_types[$model->type]
            ],
            [
                'attribute' => 'package_size',
                'value' => \backend\models\Delivery::$package_sizes[$model->package_size]
            ],
            'comment',
            'price',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
