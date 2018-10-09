<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipoobjetivo */

$this->title = 'Update Tipoobjetivo: ' . $model->idtipo;
$this->params['breadcrumbs'][] = ['label' => 'Tipoobjetivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtipo, 'url' => ['view', 'id' => $model->idtipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipoobjetivo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
