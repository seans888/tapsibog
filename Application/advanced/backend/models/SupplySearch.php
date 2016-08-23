<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Supply;

/**
 * SupplySearch represents the model behind the search form about `backend\models\Supply`.
 */
class SupplySearch extends Supply
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supp_id', 'supp_quantity', 'supp_weight'], 'integer'],
            [['supp_name'], 'safe'],
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
        $query = Supply::find();

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
            'supp_id' => $this->supp_id,
            'supp_quantity' => $this->supp_quantity,
            'supp_weight' => $this->supp_weight,
        ]);

        $query->andFilterWhere(['like', 'supp_name', $this->supp_name]);

        return $dataProvider;
    }
}
