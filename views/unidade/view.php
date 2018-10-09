<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Unidade */

$this->title = $model->idunidade;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = "$this->title";
?>
<di+v class="unidade-view">

  <h1><?= Html::encode($this->title) ?></h1>

  <p>
    <?= Html::a('Update', ['update', 'id' => $model->idunidade], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->idunidade], [
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
        'idunidade',
        'sigla',
        'nomeUnidade',
        'nivel.nivel',
        'FKUnidade',
        [
          'label'=>'Status',
          'format'=>'raw',
          'value' => $model->status == 0 ? 'Inativo' : 'Ativo',  // <----- this bit is not working
        ],
      ],
      ]) ?>

    </div>
