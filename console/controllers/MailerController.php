<?php


namespace console\controllers;
use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
/**
 * 
 */
class MailerController extends \yii\console\Controller
{
	
	public function actionSend()
	{
		$newsList = News::getList();
		$subscriber = Subscriber::getList();
		$result = Sender::run($subscriber, $newsList);
		
		
	}

}