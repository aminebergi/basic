<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OperateurhasCriteres */

$this->title = $model->Operateur_Operateur_id;
$this->params['breadcrumbs'][] = ['label' => 'Operateurhas Criteres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operateurhas-criteres-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Operateur_Operateur_id' => $model->Operateur_Operateur_id, 'Criteres_Critere_id' => $model->Criteres_Critere_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Operateur_Operateur_id' => $model->Operateur_Operateur_id, 'Criteres_Critere_id' => $model->Criteres_Critere_id], [
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
            'Operateur_Operateur_id',
            'Criteres_Critere_id',
        ],
    ]) ?>

</div>
