<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Sound;
use app\models\Usermusic;

/* @var $this yii\web\View */
/* @var $model app\models\Complaint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="complaint-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
    
    <?
    $sounds = Sound::find()->all();
    $items = ArrayHelper::map($sounds,'id','name');
    $params = [
        'prompt' => 'Choose sound name'
    ];
    echo $form->field($model, 'soundId')->dropDownList($items,$params);
    ?>

    <?
    $users = Usermusic::find()->all();
    $items = ArrayHelper::map($users,'id','login');
    $params = [
        'prompt' => 'Choose user login'
    ];
    echo $form->field($model, 'userMusicId')->dropDownList($items,$params);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
