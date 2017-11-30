<?php
use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\User;
/* @var $this yii\web\View */
/* @var $model app\models\Enseigne */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="pageheader">
    <div class="media">
        <div class="pageicon pull-left">
            <i class="fa fa-pencil"></i>
        </div>
        <div class="media-body">
            <ul class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li><a href="<?= Url::to(['enseigne/index'])  ?>">Gestion des enseignes</a></li>
                <li><?= Html::encode($this->title) ?></li>
            </ul>
        </div>
    </div><!-- media -->
</div>

<div class="criteres-form">
    <div class="contentpanel">  
    <div class="row">
        <div class="col-md-9">

    <?php $form = ActiveForm::begin(); ?>

  <div class="panel panel-default">
                    <div class="panel-heading">                       
                        <h4 class="panel-title"><?= Html::encode($this->title) ?></h4>
                    </div><!-- panel-heading -->
                    <div class="panel-body">
                        <div class="row">  

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($user, 'password')->PasswordInput() ?>
    <?= $form->field($user, 'last_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($user, 'first_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($user, 'email')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => true]) ?>


<?=$form->field($model, 'slide_id')->dropDownList(  \yii\helpers\ArrayHelper::map($model->getSlides(),'slide_id','filename' ), ['prompt'=>''] ) ?>
<?=$form->field($model, 'language_id')->dropDownList(  \yii\helpers\ArrayHelper::map($model->getLanguages(),'language_id','name' ), ['prompt'=>''] ) ?>
<?=$form->field($model, 'Type_commerce_ID')->dropDownList(  \yii\helpers\ArrayHelper::map($model->getTypec(),'ID','Nom' ), ['prompt'=>''] ) ?>
<?= $form->field($model, 'Type_enseigne')->dropDownList([ 'COMMERCE' => 'COMMERCE', 'FRANCHISE' => 'FRANCHISE' ], ['prompt' => '']) ?>





    <?= $form->field($model, 'register_required_phone')->textInput() ?>
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

</div>
 </div>                   
</div>
