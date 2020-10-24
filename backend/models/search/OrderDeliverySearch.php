<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderDelivery;

/**
 * OrderDeliverySearch represents the model behind the search form of `backend\models\OrderDelivery`.
 */
class OrderDeliverySearch extends OrderDelivery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'package_size', 'from_me', 'to_me', 'urgency'], 'integer'],
            [['order_info', 'photo', 'from_address', 'giver_name', 'giver_phone', 'giver_email', 'to_address', 'taker_name', 'taker_phone', 'taker_email', 'deadline', 'comment', 'created_at', 'updated_at'], 'safe'],
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
        $query = OrderDelivery::find();

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
            'category_id' => $this->category_id,
            'package_size' => $this->package_size,
            'from_me' => $this->from_me,
            'to_me' => $this->to_me,
            'urgency' => $this->urgency,
            'deadline' => $this->deadline,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'order_info', $this->order_info])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'from_address', $this->from_address])
            ->andFilterWhere(['like', 'giver_name', $this->giver_name])
            ->andFilterWhere(['like', 'giver_phone', $this->giver_phone])
            ->andFilterWhere(['like', 'giver_email', $this->giver_email])
            ->andFilterWhere(['like', 'to_address', $this->to_address])
            ->andFilterWhere(['like', 'taker_name', $this->taker_name])
            ->andFilterWhere(['like', 'taker_phone', $this->taker_phone])
            ->andFilterWhere(['like', 'taker_email', $this->taker_email])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
