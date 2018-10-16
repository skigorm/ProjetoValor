<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Objetivodi */

$this->title = 'Create Objetivodi';
$this->params['breadcrumbs'][] = ['label' => 'Objetivodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
