<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Employee;

/**
 * Description of ArrayHelperController
 *
 * @author andrew
 */
class ArrayHelperController extends Controller {

    //put your code here
    public function actionDemo() {
        
        $employees = Employee::find();
        return $this->render('demo', ['employees' => $employees,]);
    }

}
