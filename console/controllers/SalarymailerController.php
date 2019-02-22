<?php

namespace console\controllers;
use Yii;
use console\models\Salaryemployee;


class SalarymailerController extends \yii\console\Controller{
   
    public function actionSendsalary()
    {
        Salaryemployee::getInfo();
    }

}