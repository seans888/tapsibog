<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $pos_id
 * @property string $pos_name
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pos_name'], 'required'],
            [['pos_name'], 'string', 'max' => 44],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_id' => 'Pos ID',
            'pos_name' => 'Pos Name',
        ];
    }
}
