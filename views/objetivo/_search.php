<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjetivoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="objetivo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idobjetivo') ?>

    <?= $form->field($model, 'objetivo') ?>

    <?= $form->field($model, 'FKTipoObjetivo') ?>

    <?= $form->field($model, 'FKUnidade') ?>

    <?= $form->field($model, 'FKImpacto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
