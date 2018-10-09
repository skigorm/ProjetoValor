<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidade */

$this->title = 'Update Unidade: ' . $model->idunidade;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idunidade, 'url' => ['view', 'id' => $model->idunidade]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
