<?php
/* @var $model frontend\models\Subscribe  */

$this->title = 'Subscribe news';

$this->params['breadcrumbs'] = [
    'Test 1',
    'Test 1',
    ['label' => 'Test 1', 'url' => '/site/index',],
    'Test 1',
];

// проверяем записано ли флеш сообщение с заданным в контроллере ключем subscriberStatus
if (Yii::$app->session->hasFlash('subscriberStatus')) {
    // выводим его на экран как флеш с ключем subscriberStatus
    echo (Yii::$app->session->getFlash('subscriberStatus'));
}

if ($model->hasErrors()) {
    echo "<pre>";
    print_r($model->getErrors());
    echo "</pre>";
}
?>
<form method="post">
    <p>Email</p>
    <input type="text" name="email">
    <br>
    <br>
    <input type="submit" value="Send">
</form>