<?php


namespace backend\models;


use yii\db\ActiveRecord;

class Delivery extends ActiveRecord
{
    public static $package_sizes = [
        1 => 'Маленький',
        2 => 'Средний',
        3 => 'Большой',
        4 => 'Очень большой',
        5 => 'Нос Абая',
    ];

    public static $urgencies = [
        1 => 'Срочно',
        2 => 'Очень срочно'
    ];

    public static $delivery_types = array(
        1 => 'Разовая',
        2 => 'Регулярная'
    );
}