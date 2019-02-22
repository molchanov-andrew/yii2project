<?php

namespace console\models;

use Yii;


class Salaryemployee
{

    public static function getInfo()
    {
// SQL query
        $sql = 'SELECT id, fullname, salary, email  FROM employee;';
        $employeeSalary = Yii::$app->db->createCommand($sql)->queryAll();
// set Date
        Yii::$app->formatter->locale = 'ru-RU';
        $currentDate = Yii::$app->formatter->asDate('now');
// send mail each eployee
        foreach ($employeeSalary as $item){
            Yii::$app->mailer->compose('/mailer/salarymessage', ['employee' => $item, 'salaryDate' => $currentDate])
                ->setFrom('andymolchanov@gmail.com')
                ->setTo($item['email'])
                ->setSubject('salary')
                ->send();
        } 
// wrie to log file 

        $textRecord = 'Date of Salary: '.$currentDate;
        $fileForWriting = fopen('/var/www/project/console/config/logSalary.txt', 'a+');
        fwrite($fileForWriting, $textRecord."\r\n");
        fclose($fileForWriting);     
    }
}