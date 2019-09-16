<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller{
    public function actionIndex(){
        //echo Yii::$app->params['adminEmail']; die;
        $list = Test::getNewsList();
        //print_r($newsList);die;
        return $this->render('index',[
            'list'=>$list
        ]);
    }

    public function actionView($id){
        $item = Test::getNewsItemById($id);
        
        return $this->render('view',[
            'item'=>$item
        ]);
    }
}