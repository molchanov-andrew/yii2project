<?php

/* @var $comments array */

use yii\helpers\Html;
/*
?>
// уязвимый код. Могут исполнятся вредоносные скрипты в комментариях

<?php foreach ($comments as $comment): ?>
    <?php echo Html::tag('h5'), $comment['author']; ?>
    <?php echo Html::tag('p'), $comment['text']; ?>
    <?php echo'<hr>'; ?>


<?php endforeach; */?>

<!--вредоносный скрипт-->
<?php $string = "<script> alert ('Give me your money')</script>";

echo $string; //без экранирования
//экранируем
echo Html::encode($string).'c экранированием'; //с эккранированием
?>

<!--делаем код защитным от скриптов специальным методом хелпера Html-->

<?php foreach ($comments as $comment): ?>
    <?php echo Html::tag('h5'), Html::encode($comment['author']); ?>
    <?php echo Html::tag('p'), Html::encode($comment['text']); ?>
    <?php echo'<hr>'; ?>


<?php endforeach; ?>

