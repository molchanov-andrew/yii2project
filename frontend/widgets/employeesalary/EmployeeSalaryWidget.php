<?php

namespace frontend\widgets\employeesalary;

use frontend\models\Employee;
use yii\base\Widget;
use Yii;

/**
 * Description of EmployeeSalary
 *
 * @author andrew
 */
class EmployeeSalaryWidget extends Widget {

    public $showLimit;
            
    public function run() {
        $model = new Employee();
        $max = $this->showLimit;
        $res = $model->getEmployeeSalary($max);
        return $this->render('block', ['list' => $res]);
    }

}
