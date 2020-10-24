<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MakeDelivery;

/**
 * MakeDeliverySearch represents the model behind the search form of `backend\models\MakeDelivery`.
 */
class MakeDeliverySearch extends MakeDelivery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'transport_type_id', 'type', 'package_size', 'price'], 'integer'],
            [['from_address', 'to_address', 'date', 'on_road_task', 'comment', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MakeDelivery::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'transport_type_id' => $this->transport_type_id,
            'type' => $this->type,
            'package_size' => $this->package_size,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'from_address', $this->from_address])
            ->andFilterWhere(['like', 'to_address', $this->to_address])
            ->andFilterWhere(['like', 'on_road_task', $this->on_road_task])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
