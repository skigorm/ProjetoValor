<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Nivel;
use app\models\Unidade;


/* @var $this yii\web\View */
/* @var $model app\models\Unidade */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="unidade-form">


  <div class="col-md-4">
    <?= $form->field($model, 'sigla')->textInput(['maxlength' => true]) ?>
  </div>
  <div class="col-md-8" >
                    <?= $form->field($model, 'nomeUnidade')->textInput(['maxlength' => true]) ?>
  </div>

  <div class="col-md-4">
    <?= $form->field($model, 'FKNivel')->dropdownList(
      ArrayHelper::map(Nivel::find()->all(), 'idnivel','nivel'), [
        'prompt' => 'Selecione o Nível',])->label('Nível') ?>
        <?= Html::submitButton('Criar', ['class' => 'btn btn-success']) ?>
      </div>
      <div class="col-md-4">
        <?= $form->field($model, 'FKUnidade')->dropdownList(
          ArrayHelper::map(Unidade::find()->all(), 'idunidade','nomeUnidade'), [
            'prompt' => 'Selecione a Unidade',]); ?>

          </div>
          <div class="col-md-4">
            <?= $form->field($model, 'status')->DropDownList(['0' => 'Inativo', '1' => 'Ativo']) ?>
          </div>
        </div>
        <?php ActiveForm::end(); ?>
