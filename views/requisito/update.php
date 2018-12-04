<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Requisito */

$this->title = 'Update Requisito: ' . $model->idrequisito;
$this->params['breadcrumbs'][] = ['label' => 'Requisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idrequisito, 'url' => ['view', 'id' => $model->idrequisito]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requisito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
