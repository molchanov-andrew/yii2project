<?php

namespace frontend\models;

use yii\helpers\ArrayHelper;
use yii\base\Model;
use Yii;

class Employee extends Model {

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    
    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    
    //new
    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios() {

        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'birthDate', 'hiringDate', 'city', 'position', 'idCode', 'email',],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName',],
        ];
    }

    public function rules() {
       
        return [
            [['firstName', 'lastName', 'email'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'string', 'min'=>2,],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE], // таким образом указываем трабование валидации только для сценария UPDATE
            //new
            [['birthDate', 'hiringDate' ], 'date', 'format'=>'php:Y/m/d'],
            [['cyti'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string', 'min'=>10],
            [['birthDate', 'hiringDate', 'idCode' ], 'required', 'on'=>self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }

    public function save() {
        return true;
    }

    public function getEmployeeSalary($max) {
        $sql = 'SELECT * FROM employee ORDER by salary DESC LIMIT ' . $max;
        $res = Yii::$app->db->createCommand($sql)->queryAll();
        return $res;
    }

    public static function find() {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getCityesList() {
        $sql = 'SELECT * FROM city';
        $result = Yii::$app->db->createCommand($sql)->queryAll(); //результат из базы
        // используем Arrayhelper 
        return ArrayHelper::map($result, 'id', 'name');
    }
}
