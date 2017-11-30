<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enseigne */

$this->title = 'Update Enseigne: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Enseignes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->enseigne_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="enseigne-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
