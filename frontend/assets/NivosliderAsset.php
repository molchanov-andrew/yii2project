<?php

/*
 подключение стилей и скрипотов на страницу кторую создает контроллер NivosliderController
 */

namespace frontend\assets;
use yii\web\AssetBundle;

/**
 * Description of NivosliderAsset
 *
 * @author andrew
 */
class NivosliderAsset extends AssetBundle{
    
    public $css = [
        'css/nivoslider/style.css',
    ];
    public $js = [
        'js/nivoslider/scripts.js',
    ];
    //указываем от какой библиотеки, файла зависит исполнение стилей и скриптов определенных выше
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
