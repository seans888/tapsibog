<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Raw */

$this->title = $model->raw_id;
$this->params['breadcrumbs'][] = ['label' => 'Raws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raw-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->raw_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->raw_id], [
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
            'raw_id',
            'raw_name',
            'raw_weight',
            'raw_count',
        ],
    ]) ?>

</div>
