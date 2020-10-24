<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\OrderDeliverySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-delivery-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'order_info') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'package_size') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'from_address') ?>

    <?php // echo $form->field($model, 'from_me') ?>

    <?php // echo $form->field($model, 'giver_name') ?>

    <?php // echo $form->field($model, 'giver_phone') ?>

    <?php // echo $form->field($model, 'giver_email') ?>

    <?php // echo $form->field($model, 'to_address') ?>

    <?php // echo $form->field($model, 'to_me') ?>

    <?php // echo $form->field($model, 'taker_name') ?>

    <?php // echo $form->field($model, 'taker_phone') ?>

    <?php // echo $form->field($model, 'taker_email') ?>

    <?php // echo $form->field($model, 'urgency') ?>

    <?php // echo $form->field($model, 'deadline') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
