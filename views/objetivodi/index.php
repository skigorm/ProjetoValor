<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjetivodiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vincular Objetivos';
$this->params['breadcrumbs'][] = "$this->title";
?>
<div class="objetivodi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Vinculo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'label' => 'Objetivo que Entrega Valor',
              'attribute' => 'fKObjetivoDir.objetivo',
              'contentOptions' => ['class' => 'text-left', 'style' => 'vertical-align: middle'],
              'headerOptions' => ['class' => 'text-left', 'style' => 'vertical-align: middle'],
              'group' => true,

            ],

            [
              'label' => 'Objetivo que Recebe Valor',
              'attribute' => 'fKObjetivoInd.objetivo',
              'contentOptions' => ['class' => 'text-left', 'style' => 'vertical-align: middle'],
              'headerOptions' => ['class' => 'text-left', 'style' => 'vertical-align: middle'],
              'group' => true,
            ],
            // 'fKObjetivoDir.objetivo',
            // 'fKObjetivoInd.objetivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
