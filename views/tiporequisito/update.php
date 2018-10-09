<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tiporequisito */

$this->title = 'Update Tiporequisito: ' . $model->idtipoRequisito;
$this->params['breadcrumbs'][] = ['label' => 'Tiporequisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtipoRequisito, 'url' => ['view', 'id' => $model->idtipoRequisito]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiporequisito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
