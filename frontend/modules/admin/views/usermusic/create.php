<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usermusic */

$this->title = 'Create Usermusic';
$this->params['breadcrumbs'][] = ['label' => 'Usermusics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usermusic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
