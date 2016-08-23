<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Supply */

$this->title = $model->supp_id;
$this->params['breadcrumbs'][] = ['label' => 'Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->supp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->supp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'supp_id',
            'supp_name',
            'supp_quantity',
            'supp_weight',
        ],
    ]) ?>

</div>
