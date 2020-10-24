<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\MakeDeliverySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="make-delivery-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'from_address') ?>

    <?= $form->field($model, 'to_address') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'transport_type_id') ?>

    <?php // echo $form->field($model, 'on_road_task') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'package_size') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
