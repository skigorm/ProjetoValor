<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idunidade') ?>

    <?= $form->field($model, 'sigla') ?>

    <?= $form->field($model, 'nomeUnidade') ?>

    <?= $form->field($model, 'FKNivel') ?>

    <?= $form->field($model, 'FKUnidade') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
