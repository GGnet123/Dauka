<?php

use yii\base\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDelivery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-delivery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_info')->textInput(['maxlength' => true]) ?>

    <?php $categories = \backend\models\Categories::find()->all() ?>
    <?= $form->field($model, 'category_id')->widget(\kartik\select2\Select2::class, [
            'data' => \yii\helpers\ArrayHelper::map($categories, 'id', 'title')
    ]) ?>

    <?= $form->field($model, 'package_size')->dropDownList(\backend\models\Delivery::$package_sizes) ?>

    <?= $form->field($model, 'from_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'from_me')->checkbox(['checked'=>$model->from_me == 1]) ?>

    <div id="giver-block" style="border: 2px solid black; padding: 5px; margin-bottom: 5px">
        <?= $form->field($model, 'giver_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'giver_phone')->widget(\yii\widgets\MaskedInput::class, [
            'mask' => '+7 (999) 999-99-99'
        ]) ?>

        <?= $form->field($model, 'giver_email')->textInput(['maxlength' => true]) ?>

    </div>

    <?= $form->field($model, 'to_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'to_me')->checkbox(['checked'=>$model->to_me == 1]) ?>

    <div id="taker-block" style="border: 2px solid black; padding: 5px; margin-bottom: 5px">
        <?= $form->field($model, 'taker_name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'taker_phone')->widget(\yii\widgets\MaskedInput::class, [
            'mask' => '+7 (999) 999-99-99'
        ]) ?>

        <?= $form->field($model, 'taker_email')->textInput(['maxlength' => true]) ?>
    </div>

    <?= $form->field($model, 'urgency')->dropDownList(\backend\models\Delivery::$urgencies) ?>

    <?= $form->field($model, 'deadline')->widget(\kartik\date\DatePicker::class, [
        'value' =>$model->deadline,
        'options' => [
            'autocomplete' => 'off'
        ],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
        ]
    ]) ?>

    <?= $form->field($model, 'comment')->textarea([
        'row' => 6,
        'col' => 6
    ]) ?>

    <h3>Upload Photo</h3>
    <?= \kartik\file\FileInput::widget([
        'model' => $model,
        'attribute' => 'photo',
        'options' => ['accept' => 'image/*', 'multiple' => true],
        'pluginOptions' => [
            'uploadUrl' => \yii\helpers\Url::to(['/order-delivery/image-upload'], ['data-method' => 'POST']),
            'maxFileCount' => 5,
            'initialPreviewAsData'=>true,
            'deleteUrl' => \yii\helpers\Url::to(['/order-delivery/image-delete'], ['data-method' => 'POST']),
            'initialPreview' => $model->photo ? array_map(function($val) { return Yii::$app->params['content'] . $val; }, json_decode($model->photo)) : '',
            'overwriteInitial' => false,
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<JS
$(document).ready(function() {
    $.urlParam = function(name){
	    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	    if (results) {
	        return results[1] || 0;
	    } else {
	        return false
	    }
    };
    
    let modelId = $.urlParam('id') ? $.urlParam('id') : 0;
    $('.file-preview-frame.krajee-default.file-preview-initial.file-sortable.kv-preview-thumb').each(function() {
        let imageUrl = $(this).find('img').attr('src');
        let imagePath = imageUrl.substr(imageUrl.indexOf('/', 7) + 1)
        
        $(this).find("button[title='Remove file']").click(function() {
          $.ajax({
            method: "POST",
            url: "image-delete",
            data: { imagePath: imagePath, modelId: modelId }
          })
        })
    });
    
    
    if($('#orderdelivery-from_me').is(':checked'))
    {
        $('#giver-block').hide();
        $('label[for=orderdelivery-giver_name]').hide();
        $('label[for=orderdelivery-giver_phone]').hide();
        $('label[for=orderdelivery-giver_email]').hide();
        $('#orderdelivery-giver_name').hide();
        $('#orderdelivery-giver_phone').hide();
        $('#orderdelivery-giver_email').hide();
    }
    if($('#orderdelivery-to_me').is(':checked'))
    {
        $('#taker-block').hide();
        $('label[for=orderdelivery-taker_name]').hide();
        $('label[for=orderdelivery-taker_phone]').hide();
        $('label[for=orderdelivery-taker_email]').hide();
        $('#orderdelivery-taker_name').hide();
        $('#orderdelivery-taker_phone').hide();
        $('#orderdelivery-taker_email').hide();
    
    }
    $('#orderdelivery-from_me').on('change', function(){showOrHideGiverFields();});
    $('#orderdelivery-to_me').on('change', function(){showOrHideTakerFields();});
})

function showOrHideGiverFields() {
    if($('#orderdelivery-from_me').is(':checked'))
    {
        $('#giver-block').hide();
        $('label[for=orderdelivery-giver_name]').hide();
        $('label[for=orderdelivery-giver_phone]').hide();
        $('label[for=orderdelivery-giver_email]').hide();
        $('#orderdelivery-giver_name').hide();
        $('#orderdelivery-giver_phone').hide();
        $('#orderdelivery-giver_email').hide();
    }
    else{
        $('#giver-block').show();
        $('label[for=orderdelivery-giver_name]').show();
        $('label[for=orderdelivery-giver_phone]').show();
        $('label[for=orderdelivery-giver_email]').show();
        $('#orderdelivery-giver_name').show()
        $('#orderdelivery-giver_phone').show()
        $('#orderdelivery-giver_email').show()
    }    
}
function showOrHideTakerFields() {
    if($('#orderdelivery-to_me').is(':checked'))
    {
        $('#taker-block').hide();
        $('label[for=orderdelivery-taker_name]').hide();
        $('label[for=orderdelivery-taker_phone]').hide();
        $('label[for=orderdelivery-taker_email]').hide();
        $('#orderdelivery-taker_name').hide();
        $('#orderdelivery-taker_phone').hide();
        $('#orderdelivery-taker_email').hide();
    }
    else{
        $('#taker-block').show();
        $('label[for=orderdelivery-taker_name]').show();
        $('label[for=orderdelivery-taker_phone]').show();
        $('label[for=orderdelivery-taker_email]').show();
        $('#orderdelivery-taker_name').show()
        $('#orderdelivery-taker_phone').show()
        $('#orderdelivery-taker_email').show()
    }    
}
JS;
$this->registerJs($js);
?>