<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Заповніть, будь ласка, наступні поля, щоб зареєструватися:</p>

    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-8">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

</div></div></div></div>
