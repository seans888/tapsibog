<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Inventory */

$this->title = 'Update Inventory: ' . $model->inv_id;
$this->params['breadcrumbs'][] = ['label' => 'Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_id, 'url' => ['view', 'id' => $model->inv_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
