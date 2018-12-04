<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TiporequisitoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tiporequisitos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiporequisito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tiporequisito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtipoRequisito',
            'tipoRequisito',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
