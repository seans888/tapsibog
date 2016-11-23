<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Employees;
use backend\models\Position;

/* @var $this yii\web\View */
/* @var $model backend\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'emp_pos')->dropDownList(
    	ArrayHelper::map(Position::find()->all(),'pos_name','pos_name'),
    	['prompt'=>'Select Position']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
