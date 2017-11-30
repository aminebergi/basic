<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Criteresearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestion des critères';

?>
<div class="criteres-index">

   <div class="pageheader">
    <div class="media">
        <div class="pageicon pull-left">
            <i class="fa fa-sliders"></i>
        </div>
        <div class="media-body">
            <ul class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
             
                <li><?= Html::encode($this->title) ?></li>
            </ul>
            <h4><?= Html::encode($this->title) ?></h4>
        </div>
    </div><!-- media -->
</div><!-- pageheader -->



<div class="contentpanel">   


    <p>
        <?= Html::a('Créer un Critère', ['create'], ['class' => 'btn btn-primary btn-sm mr5 autoformat']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'panel panel-primary-head'],
        'columns' => [
            'Nom',
            
            'value',
            'type',
             [
                'label' => 'operateur',
                'format' => 'ntext',
                'attribute'=>'operator',
                'value' => function($model) {
                    if($model->operateurOperateurs!=NULL)
                    {
                    foreach ($model->operateurOperateurs as $operateur) {
                        $operators[] = $operateur->operator;
                    }
                       return implode("\n", $operators);
                    }
                    else
                    {
                        return 'null';
                    }
                    
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
