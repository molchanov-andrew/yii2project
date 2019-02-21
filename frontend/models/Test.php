<?php

namespace frontend\models;

use Yii;
// use frontend\components\StringHelper; после создания комоненты эта запись не нужна
/**
 * @params ineger $max
 */
class Test
{
	
	public static function getNewsList($max)
	{
		$max = intval($max); // приводим на всякий случай к целочисленному значению для избежания SQL инъекций

		$sql = 'SELECT * FROM news LIMIT '.$max;
		
		$result = Yii::$app->db->createCommand($sql)->queryAll();
// обрезаем текст новости до заданной длинны
		if (!empty($result) && is_array($result)) {
		
			// $helper = new StringHelper();
			// после создания компоненты

			// $helper = Yii::$app->stringHelper;
			// foreach ($result as &$item) {
			// 	$item['content'] = $helper->getShort($item['content'], 30);
			// }

			$helperAdvance = Yii::$app->stringHelperAdvance;
			foreach ($result as &$item) {
				$item['content'] = $helperAdvance->getShortAdvance($item['content']);
			}
		}
		return $result;
	}
// получаем новость с конкретным id
	public static function getItem($id)
	{
		$id = intval($id);
		$sql = "SELECT * FROM news WHERE id = $id";
		return Yii::$app->db->createCommand($sql)->queryOne();
	}
}