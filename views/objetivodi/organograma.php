<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjetivodiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Diagrama';
$this->params['breadcrumbs'][] = "$this->title";
?>

<style>
.objetivodi-index {
  position: absolute;
  top: 2;
  left: 2;
  right: 2;
}

iframe {
  width: 100%;
  height: 80vh;
}
</style>

<div class="row">
  <div class="col-md-12">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php /*echo $this->render('../Organograma/index'); */ ?>

    <iframe scrolling="auto" frameborder="0" src="http://localhost/Organograma/" "></iframe>
    <br>


</div>
</div>
