<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDelivery */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Order Deliveries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-delivery-view">

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
            'order_info',
            [
                'attribute' => 'category_id',
                'filter' => \kartik\select2\Select2::widget([
                    'data' => \yii\helpers\ArrayHelper::map(\backend\models\Categories::find()->all(), 'id', 'title'),
                    'name' => 'OrderDeliverySearch[category_id]'
                ]),
                'value' => function($model) {
                    return $model->category->title;
                }
            ],
            [
                'attribute' => 'package_size',
                'filter' => \backend\models\Delivery::$package_sizes,
                'value' => function($model) {
                    return \backend\models\Delivery::$package_sizes[$model->package_size];
                }
            ],
            'photo',
            'from_address',
            [
                'attribute' => 'from_me',
                'filter' => [
                    1 => 'True',
                    0 => 'False'
                ],
                'value' => function($model) {
                    return $model->from_me == 1 ? 'True' : 'False';
                }
            ],
            [
                'attribute' => 'giver_name',
                'visible' => !$model->from_me
            ],
            [
                'attribute' => 'giver_phone',
                'visible' => !$model->from_me
            ],
            [
                'attribute' => 'giver_email',
                'visible' => !$model->from_me
            ],
            'to_address',
            [
                'attribute' => 'to_me',
                'filter' => [
                    1 => 'True',
                    0 => 'False'
                ],
                'value' => function($model) {
                    return $model->from_me == 1 ? 'True' : 'False';
                }
            ],
            [
                'attribute' => 'taker_name',
                'visible' => !$model->to_me
            ],
            [
                'attribute' => 'taker_phone',
                'visible' => !$model->to_me
            ],
            [
                'attribute' => 'taker_email',
                'visible' => !$model->to_me
            ],
            [
                'attribute' => 'urgency',
                'filter' => \backend\models\Delivery::$urgencies,
                'value' => function($model) {
                    return \backend\models\Delivery::$urgencies[$model->urgency];
                }
            ],
            'deadline',
            'comment',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
