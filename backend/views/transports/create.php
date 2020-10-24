<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Transports */

$this->title = 'Create Transports';
$this->params['breadcrumbs'][] = ['label' => 'Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
