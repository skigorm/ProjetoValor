<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjetivodiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Diagrama';
$this->params['breadcrumbs'][] = "$this->title";
?>
<div class="objetivodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('../Organograma/index') ?>


</div>
