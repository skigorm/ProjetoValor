<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivodi */

$this->title = 'Update Objetivodi: ' . $model->FKObjetivoDir;
$this->params['breadcrumbs'][] = ['label' => 'Objetivodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FKObjetivoDir, 'url' => ['view', 'FKObjetivoDir' => $model->FKObjetivoDir, 'FKObjetivoInd' => $model->FKObjetivoInd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objetivodi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
