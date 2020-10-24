<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MakeDelivery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="make-delivery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::class, [
        'value' =>$model->date,
        'options' => [
            'autocomplete' => 'off'
        ],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
        ]
    ]) ?>

    <?php $transport_types = \backend\models\TransportTypes::find()->all() ?>
    <?= $form->field($model, 'transport_type_id')->dropDownList(\yii\helpers\ArrayHelper::map($transport_types, 'id', 'title')) ?>

    <?= $form->field($model, 'on_road_task')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(\backend\models\MakeDelivery::$delivery_types) ?>

    <?= $form->field($model, 'package_size')->dropDownList(\backend\models\Delivery::$package_sizes) ?>

    <?= $form->field($model, 'comment')->textarea([
        'row' => 6,
        'col' => 6
    ]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
