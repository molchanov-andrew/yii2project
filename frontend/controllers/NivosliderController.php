<?php



namespace frontend\controllers;
use yii\web\Controller;

/**
 * Description of NivosliderController
 *
 * @author andrew
 * 
 * 
 */
class NivosliderController extends \yii\web\Controller{
    
    public function actionRunslider()
    {
        return $this->render('index');
    }
    
}
