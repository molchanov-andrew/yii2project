<?php

namespace frontend\controllers;

use Faker\Factory;
//use frontend\models\News;
use Yii;

class TestController extends \yii\web\Controller {

    public function actionGenerate() {
        /* @var $faker Faker\Generator
         * 
         */
// очень медленный способ
//        for ($i = 1; $i <= 100; $i++) {
//            $faker = Factory::create();
//            $newsItem = new News();
//            $newsItem->title = $faker->text(35); // 35  количество символов для заголовка
//            $newsItem->content = $faker->text(rand(100, 500)); // контент
//            $newsItem->status = rand(0, 1);
//            $newsItem->save();
//        }
//        die('Stop');
        //будем применять более быстрый метод
        $faker = Factory::create();

        for ($j = 0; $j < 10; $j++) {
            $news = [];

            //внутренний цикл который будет заполнять массив $news
            for ($i = 0; $i < 2; $i++) {
                $news[] = [$faker->text(35), $faker->text(rand(100, 500)), rand(0, 1)];

            }
            // вставляем в БД записи

            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
           
        }
    }

}
