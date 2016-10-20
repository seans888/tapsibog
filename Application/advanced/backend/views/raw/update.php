<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Raw */

$this->title = 'Update Raw: ' . $model->raw_id;
$this->params['breadcrumbs'][] = ['label' => 'Raws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->raw_id, 'url' => ['view', 'id' => $model->raw_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="raw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
