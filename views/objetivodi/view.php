<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Objetivodi */

$this->title = $model->FKObjetivoDir;
$this->params['breadcrumbs'][] = ['label' => 'Objetivodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivodi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'FKObjetivoDir' => $model->FKObjetivoDir, 'FKObjetivoInd' => $model->FKObjetivoInd], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'FKObjetivoDir' => $model->FKObjetivoDir, 'FKObjetivoInd' => $model->FKObjetivoInd], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FKObjetivoDir',
            'FKObjetivoInd',
        ],
    ]) ?>

</div>
