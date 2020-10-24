<?php


namespace backend\models;


use yii\db\ActiveRecord;

/**
 * Class MakeDelivery
 * @package backend\models
 * @property int $id [int(11)]
 * @property string $from_address [varchar(255)]
 * @property string $to_address [varchar(255)]
 * @property int $date [timestamp]
 * @property int $transport_type_id [int(11)]
 * @property string $on_road_task [varchar(255)]
 * @property int $package_size [int(11)]
 * @property string $comment [varchar(255)]
 * @property int $price [int(11)]
 * @property int $created_at [timestamp]  Дата создания
 * @property int $updated_at [timestamp]  Дата редактирования
 * @property int $type [int(11)]
 * @property TransportTypes $transportType
 */

class MakeDelivery extends Delivery
{
    public static function tableName()
    {
        return '{{%make_delivery}}';
    }

    public function rules()
    {
        return [
            [
                [
                    'from_address', 'to_address', 'type', 'package_size', 'price'
                ], 'required'
            ],
            [
                [
                    'from_address', 'to_address', 'on_road_task', 'comment', 'date'
                ], 'string'
            ],
            [
                [
                    'created_at', 'updated_at'
                ], 'safe'
            ],
            [
                [
                    'transport_type_id', 'type', 'package_size', 'price'
                ], 'integer'
            ]
        ];
    }

    public function getTransportType() {
        return $this->hasOne(TransportTypes::class, ['id' => 'transport_type_id']);
    }
}