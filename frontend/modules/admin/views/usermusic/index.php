<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsermusicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usermusics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermusic-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usermusic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email:email',
            'login',
            'password',
            'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>