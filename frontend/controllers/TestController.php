<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

/**
 * 
 */
class TestController extends Controller
{
	
	public function actionIndex()// публикация списка новостей
	{
		$max = Yii::$app->params['maxNewsInList'];
		$list = Test::getNewsList($max);
		return $this->render('index',[
			'list' => $list,
		]);
		
	}

	public function actionView($id)
	{
		$item = Test::getItem($id);
		return $this->render('view', ['item'=>$item]);
	}

}