<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property integer $typ_id
 * @property string $typ_name
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['typ_name'], 'required'],
            [['typ_name'], 'string', 'max' => 44],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'typ_id' => 'Typ ID',
            'typ_name' => 'Typ Name',
        ];
    }
}
