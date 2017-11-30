<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\form\ActiveForm;
use yii\helpers\Url;
use app\models\User;
use yii\app\appassets;
/* @var $this yii\web\View */
/* @var $model app\models\Enseigne */


$this->title = 'Description de l\'enseigne';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pageheader">
    <div class="media">
        <div class="pageicon pull-left">
            <i class="glyphicon glyphicon-edit"></i>
        </div>
        <div class="media-body">
            <ul class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                <li><a href="<?= Url::to(['enseigne/index'])  ?>">Gestion des enseignes</a></li>
                <li><<?php $form = ActiveForm::begin(); ?>
            </ul>
        </div>
    </div><!-- media -->
</div>

<div class="criteres-form">
    <div class="contentpanel">  
    <div class="row">
        <div class="col-md-9">

	

    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="#" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="#" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Description de l'enseigne</h4>
                                        <p>Merci de remplir le formulaire ci-dessous</p>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
    
    <div class="col-sm-6">
    <div class="form-group">
    <?= $form->field($model, 'average_purchase_value',[
    'addon' => [ 
        'prepend' => ['content' => '$', 'options'=>['class'=>'alert-success']],
        'append' => ['content' => '.00', 'options'=>['style' => 'font-family: Monaco, Consolas, monospace;']],
    ]]) ?>
     </div><!-- form-group -->
    </div><!-- col-sm-6 -->

     <div class="col-sm-6">
            <div class="form-group">                             
                    <?= $form->field($model, 'description' ) ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
  </div>
<div class="row">
    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'facebook', [
    'addon' => [ 
        'prepend' => [
            ['content' => '<i class="fa fa-facebook-square" color:"blue"></i>'],
        ],
        
    ]
]) ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->

    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'twitter', [
    'addon' => [ 
        'prepend' => [
            ['content' => '<i class=" fa fa-twitter" color:"blue"></i>'],
        ],
        
    ]
]) ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
    </div>

<div class="row">
    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'google_plus', [
    'addon' => [ 
        'prepend' => [
            ['content' => '<i class=" fa fa-google-plus" color:"blue"></i>'],
        ],
        
    ]
]) ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
    
    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'trip_advisor') ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
    </div>
    <div class="row">
    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'instagram', [
    'addon' => [ 
        'prepend' => [
            ['content' => '<i class="fa  fa-instagram" color:"blue"></i>'],
        ],
        
    ]
])->PasswordInput() ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
    
    
    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'youtube', [
    'addon' => [ 
        'prepend' => [
            ['content' => '<i class="fa fa-youtube-play" color:"blue"></i>'],
        ],
        
    ]
]) ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
    
    
    <div class="col-sm-6">
            <div class="form-group">
                    <?= $form->field($model, 'website') ?>
    </div><!-- form-group -->
    </div><!-- col-sm-6 -->
    </div>
</div>

   <div class="panel-footer">
    <button class="btn-primary btn btn-large" type="submit"><i class="glyphicon glyphicon-edit"></i> Enregistrer</button>
    </div>
    </div></div>

  <?php $form = ActiveForm::end(); ?>