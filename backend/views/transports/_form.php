<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Transports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transports-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_id')->dropDownList(\yii\helpers\ArrayHelper::map(\backend\models\TransportTypes::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
