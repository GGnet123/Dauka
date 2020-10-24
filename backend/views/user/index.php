<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'phone_number',
                'filter' => \yii\widgets\MaskedInput::widget([
                    'name' => 'UserSearch[phone_number]',
                    'mask' => '+7 (999) 999-99-99'
                ])
            ],
            'auth_key',
//            'password_hash',
//            'password_reset_token',
            [
                'attribute' =>  'status',
                'filter' => [
                    10 => 'Активен',
                    9 => 'Не активен'
                ],
                'value' => function($model) {
                    return $model->status == 10 ? 'Активен' : 'Не активен';
                }
            ],
            'created_at',
            //'updated_at',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
