<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Supply */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supply-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supp_id')->textInput() ?>

    <?= $form->field($model, 'supp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supp_quantity')->textInput() ?>

    <?= $form->field($model, 'supp_weight')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
