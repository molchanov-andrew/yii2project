<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;


/**
 * Description of HtmlHelperController
 *
 * @author andrew
 */
class HtmlHelperController extends \yii\web\Controller{
    //put your code here
    public function actionDemo() {
        return $this->render('demo');
    }
    
    //экранирование вывода
    
    public function actionEscapeOutput() {
        $comments = [
                [
                'id' => 10,
                'author' => 'Student',
                'text' => 'Hello!',
            ],
                [
                'id' => 11,
                'author' => 'Victor',
                'text' => 'Hello! How are you?',
            ],
            [
                'id' => 11,
                'author' => 'Victor',
                'text' => "<script> alert ('Give me your money')</script>",
            ],
            
        ];
        
        return $this->render('escape-output', ['comments' => $comments]);
        
    }
}
