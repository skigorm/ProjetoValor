<?php

use yii\helpers\Html;
// use yii\grid\GridView;
// use kartik\dynagrid\DynaGrid;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidade-index">

  <h1><?= Html::encode($this->title) ?></h1>
  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <p>
    <?= Html::a('Criar Nova Unidade', ['create'], ['class' => 'btn btn-success']) ?>
  </p>


  <?php

  $gridColumns = [
    // 'idunidade',
    'sigla',
    'nomeUnidade',
    [
      // 'atribute' => 'FKNivel',
      'value' => 'nivel.nivel',
    ],
    // 'FKUnidade',
    // 'status',
    [
      'class' => 'kartik\grid\BooleanColumn',
      'attribute' => 'status',
      'vAlign' => 'middle'
  ],
    [
      'class' => 'kartik\grid\ActionColumn',
      'dropdown' => false,
    ],
  ] ?>

    <?=GridView::widget([
      'dataProvider'=> $dataProvider,
      'filterModel' => $searchModel,
      'columns' => $gridColumns,
      'class' => 'kartik\grid\ActionColumn',
      'panel' => [
        'type' => GridView::TYPE_DEFAULT,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Relatório de Unidades Organizacionais</h3>',
      ],
      'toolbar' => [
        '{export}',
        '{toggleData}',

      ],

    ]);
    ?>


  </div>
