<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Raw;

/**
 * RawSearch represents the model behind the search form about `backend\models\Raw`.
 */
class RawSearch extends Raw
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['raw_id', 'raw_count'], 'integer'],
            [['raw_name'], 'safe'],
            [['raw_weight'], 'number'],
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
        $query = Raw::find();

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
            'raw_id' => $this->raw_id,
            'raw_weight' => $this->raw_weight,
            'raw_count' => $this->raw_count,
        ]);

        $query->andFilterWhere(['like', 'raw_name', $this->raw_name]);

        return $dataProvider;
    }
}
