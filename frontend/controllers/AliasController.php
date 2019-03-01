<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class AliasController extends Controller{

    public function actionExample()
    {
        // чтобы создать псевдоним (алиас) нужно вызвать метод 
//        Yii::setAlias('@files', '/var/www/project/frontend/web/files');
        //позже в файл main-php были определены алиасы и вызов этого метода отпадает
        
        $result = mkdir(Yii::getAlias('@files').'/tst5');
        var_dump($result);
        echo Yii::getAlias('@photos');
        
    }
    
}