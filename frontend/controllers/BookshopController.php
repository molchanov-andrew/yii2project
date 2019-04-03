<?php

namespace frontend\controllers;
use frontend\models\Book;
use Yii;
use frontend\models\Publisher;

class BookshopController extends \yii\web\Controller
{
    
    
    public function actionIndex()
    {
//        $book = new Book();
//        
//        $book->name = 'Test book';
//        $book->isbn = '65432154';
//        $book->save();
//        return $this->render('index');
        
        //отобразим в данном экшене список книг для этого
  //    1. Создадим объект базы данных 
        
//        $condition = ['publisher_id'=>'1',];
//        $bookList = Book::find()->where($condition)->orderBy('date_published')->limit(5)->all();
        $bookList = Book::find()->orderBy('date_published')->limit(20)->all();
        return $this->render('index', ['bookList'=>$bookList,
            ]);
    }
    
    
    public  function actionCreate()
    {
        $book = new Book();
        $publishers = Publisher::getList();
        
        if ($book->load(\Yii::$app->request->post())){
            
            if ($book->save())
                Yii::$app->session->setFlash ('success', 'Saved!');
            // обновляем страницу
            return $this->refresh();
        }
        
        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,
        ]);
    }

}
