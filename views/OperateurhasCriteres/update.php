<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OperateurhasCriteres */

$this->title = 'Update Operateurhas Criteres: ' . $model->Operateur_Operateur_id;
$this->params['breadcrumbs'][] = ['label' => 'Operateurhas Criteres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Operateur_Operateur_id, 'url' => ['view', 'Operateur_Operateur_id' => $model->Operateur_Operateur_id, 'Criteres_Critere_id' => $model->Criteres_Critere_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="operateurhas-criteres-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
