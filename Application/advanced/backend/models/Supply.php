<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supply".
 *
 * @property integer $supp_id
 * @property string $supp_name
 * @property integer $supp_quantity
 * @property integer $supp_weight
 */
class Supply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supp_id', 'supp_name', 'supp_quantity', 'supp_weight'], 'required'],
            [['supp_id', 'supp_quantity', 'supp_weight'], 'integer'],
            [['supp_name'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supp_id' => 'Supply #',
            'supp_name' => 'Supply Name',
            'supp_quantity' => 'Supply Quantity',
            'supp_weight' => 'Supply Weight(raw item)(kg)',
        ];
    }
}
