<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Unidade;
use app\models\Tipoobjetivo;
use app\models\Impacto;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objetivo-form">

  <?php $form = ActiveForm::begin(); ?>

  <div class="col-md-12">
    <?= $form->field($model, 'objetivo')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'FKUnidade')->dropdownList(
      ArrayHelper::map(Unidade::find()->all(), 'idunidade','nomeUnidade'), [
        'prompt' => 'Selecione a Unidade',])->label('Unidade') ?>
        <div class="form-group">
          <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        </div>
      </div>

      <div class="col-md-4">
        <?= $form->field($model, 'FKTipoObjetivo')->dropdownList(
          ArrayHelper::map(Tipoobjetivo::find()->all(), 'idtipo','tipoObjetivo'), [
            'prompt' => 'Selecione o tipo do Objetivo',])->label('Tipo do Objetivo') ?>
          </div>

          <div class="col-md-4">

            <?= $form->field($model, 'FKImpacto')->dropdownList(
              ArrayHelper::map(Impacto::find()->all(), 'idimpacto','impacto'), [
                'prompt' => 'Selecione o Impacto',])->label('Impacto') ?>
              </div>

              <?php ActiveForm::end(); ?>
            </div>
