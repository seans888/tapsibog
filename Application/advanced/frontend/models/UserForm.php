<?php

namespace app\models;


use yii\base\Model;
use yii\bootstrap\ActiveForm;
use app\models\User;
use app\models\UserForm;


class UserForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
				[['name','email'],'required'],
				['email','email'],
				];
	}

}