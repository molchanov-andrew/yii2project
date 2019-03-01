<?php
//подключаем класс который определяет источники
use frontend\assets\NivosliderAsset;

//вызываем статический метод подключения register (унаследованный от AssetBundle) который принимает на вход ссылку на объект. т.к. мы сейчас находимся на странице отображения то нужно передать $this
NivosliderAsset::register($this);


echo ' START Slider Building';
?>

<div id="slider" class="nivoSlider">     
    <img src="/files/photos/watch.jpg" alt="" />    
    <a href="http://dev7studios.com"><img src="/files/photos/wine.jpg" alt="" title="#htmlcaption" /></a>     
    <img src="/files/photos/surf.jpg" alt="" title="This is an example of a caption" />     
    <img src="/files/photos/trees.jpg" alt="" /> 
</div> 
<div id="htmlcaption" class="nivo-html-caption">     
    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
</div>
