<?php
/* @var $this yii\base\View */

// использование ресурсов на странице
//1. Подключаем класс который определяет источники
use frontend\assets\GalleryAsset;

//2. вызвать метод подключения register который принимает на вход ссылку на объект. т.к. мы сейчас находимся на странице отображения то нужно передать $this

GalleryAsset::register($this);
//вызываем метод говорим о зависимости от класса
//$this->registerJsFile('@web/js/gallery/scripts.js', ['depends' => [GalleryAsset::className()]]);

$this->registerJsFile('js\gallery\scripts.js', ['depends' => [
    GalleryAsset::class
]]);
?>

<!--<script src="/js/gallery/scripts.js" type="text/javascript"></script>-->

<h1>jQuery Isotope</h1>

<div class="portfolioFilter">

    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".people">People</a>
    <a href="#" data-filter=".places">Places</a>
    <a href="#" data-filter=".food">Food</a>
    <a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

    <div class="objects">
        <img src="/files/photos/watch.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/photos/surf.jpg" alt="image">
    </div>	

    <div class="food">
        <img src="/files/photos/burger.jpg" alt="image">
    </div>

    <div class="people places">
        <img src="/files/photos/subway.jpg" alt="image">
    </div>

    <div class="places objects">
        <img src="/files/photos/trees.jpg" alt="image">
    </div>

    <div class="people food objects">
        <img src="/files/photos/coffee.jpg" alt="image">
    </div>

    <div class="food objects">
        <img src="/files/photos/wine.jpg" alt="image">
    </div>	

    <div class="food">
        <img src="/files/photos/salad.jpg" alt="image">
    </div>	

</div>

