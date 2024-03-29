<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SlanjefnalogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slanjefnalogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slanjefnalog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Slanjefnalog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'dmn_zemlja',
            'id_entel',
            'dmn_nivo_zastita',
            'dmn_cuvaj_dana',
            // 'napomena',
            // 'datvrem_mejl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
