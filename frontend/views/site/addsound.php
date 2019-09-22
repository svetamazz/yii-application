<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;

?>

<div class="container">
    <div class="row">
        <div class="col-5 col-sm-10 col-md-8 col-lg-5 col-xl-5">

            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        
            <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
        
            <?= $form->field($model, 'fileName')->fileInput() ?>
        
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        
            <?
            $categories = Category::find()->all();
            $items = ArrayHelper::map($categories,'id','name');
            $params = [
                'prompt' => 'Choose sound category'
            ];
            echo $form->field($model, 'categoryId')->dropDownList($items,$params);
            ?>
        
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>