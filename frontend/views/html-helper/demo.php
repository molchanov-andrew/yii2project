<?php

use Yii;
use yii\helpers\Html;
//html helper используется в основном для формирования тегов. Вызываем статический метод ::tag

echo Html::tag('p', 'some text'); //tag генерирует парные теги (открывающий и закрывающий)

echo Html::beginTag('div'); //формирует открывающий тег
echo 'dflghdflghdfgghdflh';
echo Html::endTag('div'); // формирует закрывающий тег

$array = [
    '1' => 'Moscow',
    '2' => 'Kiev',
    '3' => 'Minsk'        
];

echo Html::dropDownList('Cyti ID', [], $array);

echo Html::radioList('city-id', [], $array);

echo Html::checkboxList('city_id', [], $array);

echo Html::img('@images/burger.jpg', ['alt'=> 'burger',]);
