<?php
/* @result  */
use yii\helpers\Url;
?>
<h1>Book</h1>
<a href="<?= Url::to('create');?>" class="btn btn-primary">Create book</a>

<br><br>
<?php foreach ($bookList as $book): ?>

    <div class="col-md-10">
        <h3> <?php echo $book->name; ?></h3>
        <p> <?php echo $book->getDatePublished(); ?></p>
        <?php
//        $publisher = $book->getPublisher();
        //  получаем объект с данными из таблицы publisher
//        echo '<pre>';
//        print_r($publisher);
//        echo '</pre>';
        // можем вывести например название издательства
        //проверяем не пустой ли объект
//        if ($publisher) {
//            echo $publisher->name;
//        }
        ?>
        <?php foreach ($book->getAuthors() as $author):?>
        
        <p><?php echo $author->first_name.'  '.$author->last_name;?></p>
        <?php endforeach;?>
      
    </div>
    <hr>


<?php endforeach; ?>

