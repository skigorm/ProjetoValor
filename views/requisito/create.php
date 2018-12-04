<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Requisito */

$this->title = 'Create Requisito';
$this->params['breadcrumbs'][] = ['label' => 'Requisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requisito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
