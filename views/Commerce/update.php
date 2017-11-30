<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeCommerce */

$this->title = 'Modifiez le type  de commerce: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Type Commerces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-commerce-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
