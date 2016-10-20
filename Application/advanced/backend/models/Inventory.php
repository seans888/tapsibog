<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property integer $inv_id
 * @property string $inv_type
 * @property string $inv_name
 * @property string $inv_quantity
 * @property string $inv_weight
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_type', 'inv_name', 'inv_quantity'], 'required'],
            [['inv_type', 'inv_name', 'inv_quantity', 'inv_weight'], 'string', 'max' => 44],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_id' => 'Inv ID',
            'inv_type' => 'Inv Type',
            'inv_name' => 'Inv Name',
            'inv_quantity' => 'Inv Quantity',
            'inv_weight' => 'Inv Weight',
        ];
    }
}
