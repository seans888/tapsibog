<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $emp_id
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_pos
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_fname', 'emp_lname', 'emp_pos'], 'required'],
            [['emp_fname', 'emp_lname', 'emp_pos'], 'string', 'max' => 44],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Employee ID',
            'emp_fname' => 'First Name',
            'emp_lname' => 'Last Name',
            'emp_pos' => 'Position',
        ];
    }
}
