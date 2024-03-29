<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SlanjefajloviSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slanjefajlovis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slanjefajlovi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Slanjefajlovi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_slanjefnalog',
            'ime_fajla',
            'mesto',
            'size_MB',
            // 'datvrem',
            // 'datvrem_del',
            // 'file_route',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
