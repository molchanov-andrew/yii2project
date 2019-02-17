<?php

namespace frontend\models;

use Yii;
/**
 * 
 */
class CountNews
{
	
	public static function getNewsNumber()
	{
		$sql = 'SELECT * FROM news';
		$result = Yii::$app->db->createCommand($sql)->queryAll();
		// return sizeof($result);
		return count($result);
	}
}