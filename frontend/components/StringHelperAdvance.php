<?php

/**
 * 
 */

namespace frontend\components;

use Yii;

class StringHelperAdvance
{
	private $wordsLimit;
	function __construct()
	{
		$this->wordsLimit = Yii::$app->params['wordsLimitInNews'];
	}

	public function getShortAdvance($string, $wordsLimit=null)
	{
		if ($wordsLimit === null) {
			$wordsLimit = $this->wordsLimit+1;
		}
		$res = array_slice(explode(' ', $string, $wordsLimit), 0, $wordsLimit-1);
		$res1 = array_push($res, '...');
		return implode(' ', $res);
	}
}