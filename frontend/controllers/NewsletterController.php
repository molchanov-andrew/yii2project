<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\example\Subscribe;

class NewsletterController extends Controller{

    public function actionSubscribe()
    {
        $formData = Yii::$app->request->post(); //данные из формы мы записывем из компоненты request и метода в нем post()
        $model = new Subscribe();
        

        if (Yii::$app->request->isPost){ //если данные отправлялись выполняем скрипт, если нет - отображаем страницу
            // записываем в обьект модели данные из формы
            $model->email = $formData['email'];
            //если валидация ок, записывам данные в БД
            if ($model->validate() && $model->save($model['email'])){ // если валидация прошла успешно и записываем в БД
                //создаем шаблон флеш сообщения
                Yii::$app->session->setFlash('subscriberStatus', 'Subscribe compleet');
            };
                       
        }
        
        return $this->render('subscribe',['model' => $model]);
        
    }
}