<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivo */

$this->title = 'Update Objetivo: ' . $model->idobjetivo;
$this->params['breadcrumbs'][] = ['label' => 'Objetivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idobjetivo, 'url' => ['view', 'id' => $model->idobjetivo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objetivo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
