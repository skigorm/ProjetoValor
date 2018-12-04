<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipoObjetivoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipoobjetivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoobjetivo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipoobjetivo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtipo',
            'tipoObjetivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
