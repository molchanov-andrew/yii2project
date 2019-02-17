<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\CountNews;

/**
 * 
 */

class CountnewsController extends Controller
{

	public function actionIndex()

	{

		$countNewsResult = CountNews::getNewsNumber();
		return $this->render('index', ['count' => $countNewsResult]);
	}
}