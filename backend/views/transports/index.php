<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TransportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transports-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transports', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'type_id',
                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\TransportTypes::find()->all(), 'id', 'title'),
                'value' => function($model) {
                    return $model->transportType->title;
                }
            ],
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
