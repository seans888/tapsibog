<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $ord_id
 * @property string $ord_name
 * @property integer $ord_quantity
 * @property integer $ord_price
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ord_name', 'ord_quantity', 'ord_price'], 'required'],
            [['ord_quantity', 'ord_price'], 'integer'],
            [['ord_name'], 'string', 'max' => 44],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ord_id' => 'Ord ID',
            'ord_name' => 'Ord Name',
            'ord_quantity' => 'Ord Quantity',
            'ord_price' => 'Ord Price',
        ];
    }
}
