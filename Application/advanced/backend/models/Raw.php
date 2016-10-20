<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "raw".
 *
 * @property integer $raw_id
 * @property string $raw_name
 * @property double $raw_weight
 * @property integer $raw_count
 */
class Raw extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'raw';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['raw_name', 'raw_weight', 'raw_count'], 'required'],
            [['raw_weight'], 'number'],
            [['raw_count'], 'integer'],
            [['raw_name'], 'string', 'max' => 66],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'raw_id' => 'Raw ID',
            'raw_name' => 'Raw Name',
            'raw_weight' => 'Raw Weight',
            'raw_count' => 'Raw Count',
        ];
    }
}
