<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_number')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '+7 (999) 999-99-99',
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        10 => 'Активен',
        9 => 'Не активен'
    ]) ?>

    <?= $form->field($model, 'password_hash')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
