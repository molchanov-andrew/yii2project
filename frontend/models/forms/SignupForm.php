<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use frontend\models\events\UserRegisteredEvent;
use Yii;

/**
 * Description of SignupForm
 *
 * @author andrew
 */
class SignupForm extends Model {

    public $username;
    public $email;
    public $password;

    public function rules() {
        return [
            [['username'], 'trim'], //trim обрезает лишние пробелы в начале и в конце введенных данных
            [['username'], 'required'], // required - обязательное для заполения поле
            [['username'], 'string', 'max' => 255, 'min' => 2],
            
            [['email'], 'trim'],
            [['email'], 'email'], // поле должно содержать валидный имейл
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::class], // поле должно быть уникальным в таблице которю получает класс User?  а это таблица user
            
            [['password'], 'required'],
            [['password'], 'string', 'min' => 6],
        ];
    }
/* @return User || null*/
    public function save() {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username; 
            $user->email = $this->email; 
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = \Yii::$app->security->generateRandomString(); // сгенерируем случапйную строку методом "из коробки"
            $user->password_hash = \Yii::$app->security->generatePasswordHash($this->password); // хешируем пароль методом "из коробки"
            
            if($user->save()) {
                $event = new UserRegisteredEvent();
                $event->user = $user;
                $event->subject = 'New user registered';
                
                // вызываем обработчик события
                $user->trigger($user::USER_REGISTERED, $event);
               
                return $user;
            }
                
        }
    }

}
