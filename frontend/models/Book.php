<?php

use yii\db\ActiveRecord;
use Yii;

namespace frontend\models;

/**
 * Description of Book
 *
 * @author andrew
 */
class Book extends \yii\db\ActiveRecord{
    
    
    public static function tableName()
    {
        return '{{book}}';
    }
    
    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
        ];
    }

    public function getDatePublished()
    {
        //использунм встроенный formatter для форматирования дат, чисел...
        
        return ($this->date_published) ? \Yii::$app->formatter->asDate($this->date_published) : "Non Set";
    }
    
        // на уровне модели описываем связь между таблицами publisher и book
    
    public function getPublisher()
    {
        // указываем связь модели таблицы book c publisher один к одному и по каким полям происходит связь
        // поле id текущей таблицы связываем с полем publisher_id таблицы publisher_id и вызываем метод one() - один к одному
        return $this->hasOne(Publisher::class, ['id'=>'publisher_id'])->one();
    }
    public  function getPublisherName()
    {
        if ($publisher = $this->getPublisher()){
            return $publisher->name;
        }
        return "not Set";
    }
    
    //  опишем связь один ко многим. Один автор - много книг. Через вспомогательную таблицу связей book_to_author
    //  указываем с каким классом мы связываем класс Book. BookToAuthor::name встроенный статический метод возвращающий имя класса
    public function getBookToAuthorRelations()
     {
        return $this->hasMany(BookToAuthor::class,['book_id'=>'id']);
     }
     
     // описываем связь промежуточной таблицы с таблицей авторов ЧЕРЕЗ связь getBookToAuthorRelation
     // all() - получить данные
     public function getAuthors()
     {
         return $this->hasMany(Authors::class, ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
     }

}
