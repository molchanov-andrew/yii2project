<?php


namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Description of GalleryAsset
 *
 * @author andrew
 */
class GalleryAsset extends AssetBundle{
    // указываем какие ресурсы используются на странице
    
    public  $css = [
        'css/gallery/style.css',
    ];
            
    public $js = [
        'js/isotope/jquery.isotope.js',
        'js/gallery/scripts.js'
    ];
    // перечисляем библиотеки от которых зависити исполнение наших зависимостей (они зависят от jquery)
    // теперь jquery будет подключена первой
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
