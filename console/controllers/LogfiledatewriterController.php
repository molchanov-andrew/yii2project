<?php

namespace console\controllers;
use Yii;

class LogfiledatewriterController extends \yii\console\Controller{

    private $logFilePath = "/var/www/project/frontend/web/logSalary.txt";
    public function actionWrite()
    {   
        Yii::$app->formatter->locale = 'ru-RU';
        $currentDate = Yii::$app->formatter->asDatetime('now');
        echo $currentDate;
        $fileForWriting = fopen($this->logFilePath, 'a+');

        fwrite($fileForWriting, $currentDate."\r\n");
        fclose($fileForWriting);
    }
}