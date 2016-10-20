<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Inventory;

/**
 * InventorySearch represents the model behind the search form about `backend\models\Inventory`.
 */
class InventorySearch extends Inventory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_id'], 'integer'],
            [['inv_type', 'inv_name', 'inv_quantity', 'inv_weight'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Inventory::find();

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
            'inv_id' => $this->inv_id,
        ]);

        $query->andFilterWhere(['like', 'inv_type', $this->inv_type])
            ->andFilterWhere(['like', 'inv_name', $this->inv_name])
            ->andFilterWhere(['like', 'inv_quantity', $this->inv_quantity])
            ->andFilterWhere(['like', 'inv_weight', $this->inv_weight]);

        return $dataProvider;
    }
}
