<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form about `backend\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_id'], 'integer'],
            [['emp_fname', 'emp_lname', 'emp_pos'], 'safe'],
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
        $query = Employees::find();

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
            'emp_id' => $this->emp_id,
        ]);

        $query->andFilterWhere(['like', 'emp_fname', $this->emp_fname])
            ->andFilterWhere(['like', 'emp_lname', $this->emp_lname])
            ->andFilterWhere(['like', 'emp_pos', $this->emp_pos]);

        return $dataProvider;
    }
}
