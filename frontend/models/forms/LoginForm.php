<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use Yii;

//use yii\db\ActiveRecord;

/**
 * Description of LoginForm
 *
 * @author andrew
 * @model frontend\
 */
class LoginForm extends Model {

    public $username;
    public $password;

    public function rules() {
        return [
            [['username'], 'trim'], //trim обрезает лишние пробелы в начале и в конце введенных данных
            [['username'], 'required'], // required - обязательное для заполения поле
            [['password'], 'required'],
            [['password'], 'validatePassword'],
        ];
    }

//    public function login() {
//        if ($this->validate()) {
//            $user = User::findByUserName($this->username);
//            
//            return \Yii::$app->user->login($user);
//        }
//        return false;
//    }
    public function login()
    {
        if ($this->validate()) {
            // запоминаем пользователя (после необходимых настроек user)
            // на вход подадим экземпляр класса User
            $user = User::findByUsername($this->username);
            return Yii::$app->user->login($user);
        }
        return false;
    }

    //напишем свой валидатор (есть встроенные валидаторы)
    //собственніе валидаторі не должні ничего возвращать
    // только addError?  если ошибка присутствует
    public function validatePassword($attribute, $params) {
        //$this-> это ссылка на объект модели $model - $model = new LoginForm();
        // используя ActiveRecord ищем запись 
        // сравниваем обычный пароль и захешированный при помощи встроенного метода компоненты security

        $user = User::findByUserName($this->username);

        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError($attribute, 'Invalid passqord');
        }
    }

}
