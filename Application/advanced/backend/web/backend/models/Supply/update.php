<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Supply */

$this->title = 'Update Supply: ' . $model->supp_id;
$this->params['breadcrumbs'][] = ['label' => 'Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->supp_id, 'url' => ['view', 'id' => $model->supp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
