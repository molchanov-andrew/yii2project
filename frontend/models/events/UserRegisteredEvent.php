<?php

namespace frontend\models\events;
use yii\base\Event;
use frontend\models\User;
use common\components\UserNotificationInterface;

/**
 * @author andrew
 */
class UserRegisteredEvent extends Event implements UserNotificationInterface{
    
    /*
     * @var User 
     *      */
    
    public $user;
    
    /*
     * @subject string
     */
    public $subject;
    
    public function getSubject()
    {
        return $this->subject;
    }
    
    public function getEmail()
    {
        return $this->user->email;
    }
    
    
}
