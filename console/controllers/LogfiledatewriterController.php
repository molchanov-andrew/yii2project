<?php

namespace console\controllers;
use Yii;

class LogfiledatewriterController extends \yii\console\Controller{

    
    public function actionWrite()
    {   
        
        
        Yii::$app->formatter->locale = 'ru-RU';
        $currentDate = Yii::$app->formatter->asDatetime('now');
        echo $currentDate;
  
        $fileForWriting = fopen(Yii::getAlias('@logfile').'/log.txt', 'a+');
        fwrite($fileForWriting, $currentDate."\r\n");
        fclose($fileForWriting);
    }
}