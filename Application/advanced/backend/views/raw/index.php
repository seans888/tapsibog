<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RawSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Raws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="raw-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Raw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'raw_id',
            'raw_name',
            'raw_weight',
            'raw_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
