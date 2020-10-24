<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MakeDeliverySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Make Deliveries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="make-delivery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Make Delivery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'from_address',
            'to_address',
            [
                'attribute' => 'date',
                'filter' => \yii\jui\DatePicker::widget([
                    'dateFormat' => 'yyyy-MM-dd',
                    'name' => 'MakeDeliverySearch[date]',
                    'options' => [
                        'class' => 'form-control',
                        'autocomplete' => 'off'
                    ]
                ])
            ],
            [
                'attribute' => 'transport_type_id',
                'value' => function($model) {
                    return $model->transportType->title;
                },
                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\TransportTypes::find()->all(), 'id', 'title')
            ],
            [
                'attribute' => 'type',
                'filter' => \backend\models\MakeDelivery::$delivery_types,
                'value' => function($model) {
                    return \backend\models\MakeDelivery::$delivery_types[$model->type];
                }
            ],
            [
                'attribute' => 'package_size',
                'filter' => \backend\models\Delivery::$package_sizes,
                'value' => function($model) {
                    return \backend\models\Delivery::$package_sizes[$model->package_size];
                }
            ],
            //'on_road_task',
            //'comment',
            //'price',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
