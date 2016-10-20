<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Type */

$this->title = 'Update Type: ' . $model->typ_id;
$this->params['breadcrumbs'][] = ['label' => 'Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->typ_id, 'url' => ['view', 'id' => $model->typ_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
