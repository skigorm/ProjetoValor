<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RequisitoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requisitos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requisito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requisito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idrequisito',
            'descRequisito:ntext',
            'FKtipoRequisito',
            'FKObjetivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
