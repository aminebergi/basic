<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Enseigne */

$this->title = 'Create Enseigne';

?>

<div class="enseigne-create">


    <?= $this->render('_form', [
        'model' => $model,
        'user' => $user,
    ]) ?>

</div>
