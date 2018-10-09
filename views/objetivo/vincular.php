<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Objetivo;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Objetivo */

// $this->title = $model->idobjetivo;
$this->params['breadcrumbs'][] = ['label' => 'Objetivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = "Vincular Objetivos";
?>
<div class="objetivo-vincular">

  <!-- <p>
      <?= Html::a('Vincular Objetivos', ['create'], ['class' => 'btn btn-success']) ?>
  </p> -->

  <div class="objetivo-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="col-md-4">
    <?= $form->field($model, 'FKObjetivoDir')->dropdownList(
        ArrayHelper::map(Objetivo::find()->all(), 'idobjetivo','objetivo'), [
        'prompt' => 'Selecione a Objetivo A',])->label('Objetivo A') ?>
    <div class="form-group">
        <?= Html::submitButton('Vincular', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<div class="col-md-4">
    <?= $form->field($model, 'FKObjetivoInd')->dropdownList(
        ArrayHelper::map(Objetivo::find()->all(), 'idobjetivo','objetivo'), [
        'prompt' => 'Selecione a Objetivo B',])->label('Objetivo B') ?>

</div>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        // ['class' => 'yii\grid\SerialColumn'],

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>

<?php ActiveForm::end(); ?>
    </div>
</div>
