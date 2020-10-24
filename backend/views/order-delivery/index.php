<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderDeliverySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Deliveries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-delivery-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order Delivery', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
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
//            'photo',
            //'from_address',
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
            //'giver_name',
            //'giver_phone',
            //'giver_email:email',
            //'to_address',
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
            //'taker_name',
            //'taker_phone',
            //'taker_email:email',
            [
                'attribute' => 'urgency',
                'filter' => \backend\models\Delivery::$urgencies,
                'value' => function($model) {
                    return \backend\models\Delivery::$urgencies[$model->urgency];
                }
            ],
            [
                'attribute' => 'deadline',
                'filter' => \yii\jui\DatePicker::widget([
                    'dateFormat' => 'yyyy-MM-dd',
                    'name' => 'OrderDeliverySearch[deadline]',
                    'options' => [
                        'class' => 'form-control',
                        'autocomplete' => 'off'
                    ]
                ]),
            ],
            //'comment',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
