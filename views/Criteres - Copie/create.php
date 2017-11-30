<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Criteres */

$this->title = 'Créer un critère';
$this->params['breadcrumbs'][] = ['label' => 'Criteres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="criteres-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
