<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Requisito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descRequisito')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'FKtipoRequisito')->textInput() ?>

    <?= $form->field($model, 'FKObjetivo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
