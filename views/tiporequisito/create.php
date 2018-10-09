<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiporequisito */

$this->title = 'Create Tiporequisito';
$this->params['breadcrumbs'][] = ['label' => 'Tiporequisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiporequisito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
