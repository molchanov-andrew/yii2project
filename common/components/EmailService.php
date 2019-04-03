<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\components;
use common\components\UserNotificationInterface;
use yii\base\Component;
use Yii;

/**
 * Description of EmailService
 * @param UserNotificationInterface $user
 * @param string $subject
 * @author andrew
 */

// чтобы использовать как компонент нужно расширить от класса Component
class EmailService extends Component{
    //put your code here
    
    public  function notifyUser(UserNotificationInterface $event)
    {
        return \Yii::$app->mailer->compose()
            ->setFrom('service.email@yii2frontend.com')
            ->setTo($event->getEmail())
            ->setSubject($event->getSubject())
            ->send();
    }
     public function notifyAdmins(UserNotificationInterface $event)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('service.email@yii2frontend.com')
            ->setTo('andymolchanov@gmail.com')
            ->setSubject($event->getSubject())
            ->send();
    }
}
