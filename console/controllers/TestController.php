<?php


namespace console\controllers;


use yii\console\Controller;

class TestController extends Controller
{
    public function actionGeneratePass() {
        var_dump(\Yii::$app->security->generatePasswordHash('asd'));
    }
}