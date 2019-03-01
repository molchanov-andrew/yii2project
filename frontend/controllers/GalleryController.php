<?php



namespace frontend\controllers;
use Yii;

/**
 * Description of GalleryController
 *
 * @author andrew
 */
class GalleryController extends \yii\web\Controller{
    
    
    
    
    public function actionIndex()
    {
        return $this->render('index');
    }
}
