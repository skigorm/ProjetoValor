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
// $this->params['breadcrumbs'][] = ['label' => 'Objetivos', 'url' => ['index']];
// $this->params['breadcrumbs'][] = "Vincular Objetivos";
?>

<div class="objetivodi-form">

  <?php $form = ActiveForm::begin(); ?>
  <div class="row">
    <div class="col-md-12">
      <?= $form->field($model, 'FKObjetivoDir')->dropdownList(
        ArrayHelper::map(Objetivo::find()->all(), 'idobjetivo','objetivo'), [
          'prompt' => 'Selecione a Objetivo A',])->label('Objetivo que Entrega Valor') ?>
          <div class="form-group">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?= $form->field($model, 'FKObjetivoInd')->widget(Select2::classname(), [
          'options' => ['prompt' => '', 'multiple' => true],
          'showToggleAll' => false,
          'data' => ArrayHelper::map(Objetivo::find()->asArray()->all(), 'idobjetivo', 'objetivo'),
          'pluginOptions' => [
            'allowClear' => true,
          ],
          ])->label('Objetivo que Recebe Valor')?>
            <div class="form-group">
              <?= Html::submitButton('Vincular', ['class' => 'btn btn-success']) ?>
            </div>
          </div>
        </div>
      </div>



<?php ActiveForm::end(); ?>

</div>
