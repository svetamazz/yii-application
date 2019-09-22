<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usermusic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usermusic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?
    $items = ['1'=>'admin','0'=>'user'];
    $params = [
        'prompt' => 'Choose user role'
    ];
    echo $form->field($model, 'isAdmin')->dropDownList($items,$params);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
