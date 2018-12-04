<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RequisitoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idrequisito') ?>

    <?= $form->field($model, 'descRequisito') ?>

    <?= $form->field($model, 'FKtipoRequisito') ?>

    <?= $form->field($model, 'FKObjetivo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
