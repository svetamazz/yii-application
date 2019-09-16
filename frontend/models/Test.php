<?php

namespace frontend\models;

use Yii;

class Test {
    public static function getNewsList(){
        $limit=Yii::$app->params['maxNewsInList'];
        $sql="SELECT * FROM news LIMIT $limit";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getNewsItemById($id){
        $sql="SELECT * FROM news WHERE id=$id";
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}