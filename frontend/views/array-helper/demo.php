<?php

/* @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

echo '<pre>';
print_r($employees);
echo '</pre>';
// используем хелпер для вывода колонки с емейлами 

$emails = ArrayHelper::getColumn($employees, 'email');

echo '<pre>';
print_r($emails);
echo '</pre>';

// или выводив как строку

echo implode(', ', $emails);

$array = [
    '1' => 'Moscow',
    '2' => 'Kiev',
    '3' => 'Minsk'        
];

$listData = ArrayHelper::map($employees, 'id', 'email');
echo '<pre>';
print_r($listData);
echo '</pre>';
echo Html::dropDownList('emails', [], $listData);


