<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RawSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="raw-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'raw_id') ?>

    <?= $form->field($model, 'raw_name') ?>

    <?= $form->field($model, 'raw_weight') ?>

    <?= $form->field($model, 'raw_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
