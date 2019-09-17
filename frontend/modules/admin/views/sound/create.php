<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sound */

$this->title = 'Create Sound';
$this->params['breadcrumbs'][] = ['label' => 'Sounds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sound-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
