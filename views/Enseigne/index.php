<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Enseignesearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
;


$this->title = 'Gestion des enseignes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enseigne-index">

   <div class="pageheader">
    <div class="media">
        <div class="pageicon pull-left">
            <i class="fa fa-sitemap"></i>
        </div>
        <div class="media-body">
            <ul class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
              <li>Réglages Super-Admin </li>
                <li><?= Html::encode($this->title) ?></li>
            </ul>
            <h4><?= Html::encode($this->title) ?></h4>
        </div>
    </div><!-- media -->
</div><!-- pageheader -->



<div class="contentpanel">   


    <p>
        <?= Html::a('Create Enseigne', ['create'], ['class' => 'btn btn-primary btn-sm mr5 autoformat']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       
        'options' => ['class' => 'panel panel-primary-head'],
        'columns' => [
       

            'enseigne_id',
            'name',
            'contact_email:email',
            'average_purchase_value',
            'description:ntext',
            // 'facebook',
            // 'twitter',
            // 'google_plus',
            // 'trip_advisor',
            // 'instagram',
            // 'youtube',
            // 'website',
            // 'logo',
            // 'register_required_name',
            // 'register_required_email:email',
            // 'default_optin',
            // 'pts_register',
            // 'passage_or_amount',
            // 'clean_points',
            // 'clean_points_param',
            // 'register_to_use_points',
            // 'delay_before_checkin',
            // 'ipad_pin',
            // 'ipad_pin_reward',
            // 'language_id',
            // 'slide_id',
            // 'setting_pts_amount_currency_id',
            // 'register_required_phone',
            // 'Typeco_ID',
            // 'Type_commerce_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
