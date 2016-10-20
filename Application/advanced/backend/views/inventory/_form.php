<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Type;
use backend\models\Inventory;

/* @var $this yii\web\View */
/* @var $model backend\models\Inventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventory-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'inv_type')->dropDownList(
    	ArrayHelper::map(Type::find()->all(),'typ_name','typ_name'),
    	['prompt'=>'Select Type']
    	) ?>

    <?= $form->field($model, 'inv_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_weight')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
