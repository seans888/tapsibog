<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Raw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'raw_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'raw_weight')->textInput() ?>

    <?= $form->field($model, 'raw_count')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
