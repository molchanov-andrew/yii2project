<?php


namespace console\controllers;
use Yii;
/**
 * 
 */
class MailerController extends \yii\console\Controller
{
	
	public function actionSend()
	{
		$result = Yii::$app->mailer->compose()
                ->setFrom('andymolchanov@gmail.com')
                ->setTo('andymolchanov@gmail.com')
                ->setSubject('Я настроил планировщик')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
        var_dump($result); die;
	}

}