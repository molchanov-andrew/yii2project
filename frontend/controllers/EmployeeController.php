<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;
use frontend\models\example\Animal; 
use frontend\models\example\Human;


class EmployeeController extends Controller{

    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = 1000;

        echo $employee1['salary'];

        echo "<hr>";

        foreach ($employee1 as $attribute => $value){
            echo "$attribute : $value <br>";
        }

        $array = $employee1->toArray();

        echo "<pre>";
        print_r($array);
        echo "</pre>";
        echo "<pre>";
        print_r($employee1->attributes());
        echo "</pre>";
        echo "<pre>";
        print_r($employee1->attributes);
        echo "</pre>";
    }

    public function actionTest()
    {
        $human1 = new Human();
        $animal1 = new Animal();

        $human1->walk();
        echo "<br>";
        $animal1->walk();
    }

    public function actionRegister()
    {
        $model = new Employee(); // создаем объект модели 
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER; //указываем что использовать нужно сценарий именно этот

        
        // проверяем если отправлена форма то работаем с ней
        if($model->load(Yii::$app->request->post())){
          
            // валидируем данные полSученные из формы
            if($model->validate() && /*сохраняем данные*/ $model->save()){
                // если валидация ок и данные сохранены создаем флеш сообщение

                Yii::$app->session->setFlash('success', 'registered');
            }
           

        }

        return $this->render('register', ['model' => $model]);
    }

    public function actionUpdate()
    {
        $model = new Employee(); // создаем объект модели 
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE; //указываем что использовать нужно сценарий именно этот

        $formData = Yii::$app->request->post(); // получаем данные из формы
        
        // проверяем если отправлена форма то работаем с ней
        if(Yii::$app->request->isPost){
         
            // присваиваем данные из формы в объект  класса Emploee
            $model->attributes = $formData;
            // валидируем данные полSученные из формы
            if($model->validate() && /*сохраняем данные*/ $model->save()){
                // если валидация ок и данные сохранены создаем флеш сообщение
        
                Yii::$app->session->setFlash('success', 'updated');
            }
           

        }

        return $this->render('update', ['model' => $model]);
    }


}