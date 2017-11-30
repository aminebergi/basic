<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Criteres */
/* @var $form yii\widgets\ActiveForm */
/* @var $models app\models\OperateurhasCriteres */
?>
<div class="pageheader">
    <div class="media">
        <div class="pageicon pull-left">
            <i class="fa fa-pencil"></i>
        </div>
        <div class="media-body">
            <ul class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li><a href="<?= Url::to(['criteres/index'])  ?>">Gestion des criteres</a></li>
                <li><?= Html::encode($this->title) ?></li>
            </ul>
        </div>
    </div><!-- media -->
</div>

<div class="criteres-form">
	<div class="contentpanel">  
    <div class="row">
        <div class="col-md-9">

 <?php $form = ActiveForm::begin(); 
    $list = [0 => 'PHP', 1 => 'MySQL', 2 => 'Javascript'];
	$list2 = [1,3];
	$list3=\yii\helpers\ArrayHelper::map($model->getOperateurs(),'Operateur_id','operator');
	print_r($model->getOperateurOperateurs()); 
	echo'</br></br></br></br></br>';
		print_r(\yii\helpers\ArrayHelper::map($model->getOperateurs(),'Operateur_id','operator'));
		print_r($list);




?>
    <div class="panel panel-default">
                    <div class="panel-heading">                       
                        <h4 class="panel-title"><?= Html::encode($this->title) ?></h4>
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        <div class="row">  
<?=$form->field($model, 'type')->CheckboxList($list3,$list2) ?>
    <?= $form->field($model, 'Nom')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'type')->dropDownList([ 'TEXT' => 'TEXT', 'INTEGER' => 'INTEGER', 'DATE' => 'DATE', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>
   <?= Html::checkboxList('CuisineId',$list2,$list3); ?>


  </div><!-- row -->
                    </div><!-- panel-body -->
                    <div class="panel-footer">
                      <div class="row">
                        <div class="col-sm-9 col-sm-offset-3"> 
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
      </div>
                      </div>
                    </div><!-- panel-footer -->  
                </div>

    <?php ActiveForm::end(); ?>

</div><!-- col-md-6 -->
    </div>                   
</div>