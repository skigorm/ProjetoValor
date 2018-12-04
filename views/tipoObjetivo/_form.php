<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoobjetivo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipoobjetivo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idtipo')->textInput() ?>

    <?= $form->field($model, 'tipoObjetivo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
