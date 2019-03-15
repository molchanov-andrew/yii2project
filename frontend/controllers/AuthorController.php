<?php

namespace frontend\controllers;
use frontend\models\Authors;
use Yii;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Authors();
        //загружаем данные в модель($model) из глобального массива post
        // и сохраняем save(). По умолчанию перед методом save выполняется валидация данных
        
        if ($model->load(\Yii::$app->request->post()) && $model->save()){
            // добавляем флеш сообщение для пользователя
            \Yii::$app->session->setFlash('success', 'Author add');
            // перенаправить пользователя на список авторов
            return $this->redirect(['author/index']);
        }
        
        return $this->render('create', ['model'=>$model,]);
    }

    public function actionDelete($id)
    {
        $model = Authors::findOne($id);
        
        // вызыываем встроенный метод delete()
        $model->delete();
        // и перенаправляем на страницу авторов. По сути вью здесь не нужен показав при этом флеш сообщение
         \Yii::$app->session->setFlash('success', 'Author has been updated');     
        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        $authorList = Authors::find()->all();
        return $this->render('index', ['authorList'=>$authorList,]);
    }

    public function actionUpdate($id)
    {
        // используем модель Author ищем единственную запись статический метод: findOne() и в него передаем $id
                $model = Authors::findOne($id);
        // теперь у нас есть обьект класса Authors и можем с ним дальше работать

        
        
        if ($model->load(\Yii::$app->request->post()) && $model->save()){
            // добавляем флеш сообщение для пользователя
            \Yii::$app->session->setFlash('success', 'Author has been updated');
            // перенаправить пользователя на список авторов
            return $this->redirect(['author/index']);
        }
        return $this->render('update', ['model'=>$model,]);
    }

}
