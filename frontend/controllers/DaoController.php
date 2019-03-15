<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\web\Controller;
use Yii;

namespace frontend\controllers;

/**
 * Description of ВфщСщтекщддук
 *
 * @author andrew
 */
class DaoController extends \yii\web\Controller {

    //put your code here
    public function actionIndex() {
//        $db = new \yii\db\Connection([
//            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
//            'username' => 'yii2user',
//            'password' => '111111',
//            'charset' => 'utf8',
//        ]);
//        
//        $sql = 'SELECT * FROM city';
//        $command = new \yii\db\Command([
//            'db' => $db,
//            'sql' => $sql,
//        ]);
//        
//        $arrayWithResult = $command->queryAll();
//        var_dump($arrayWithResult);
//        return $this->render('index');
//----------------------------------------------------------------------------       
//        $sql1 = 'SELECT * FROM city';
//        $res1 = \Yii::$app->db->createCommand($sql1)->queryAll();
//        echo '<pre>';
//        print_r($res1);
//        echo '</pre>';
//        echo '<hr>';
//        
//        $sql2 = 'SELECT * FROM test';
//        $res2 = \Yii::$app->db2->createCommand($sql2)->queryAll();
//        echo '<pre>';
//        print_r($res2);
//        echo '</pre>';
//        echo '<hr>';
//        
//        return $this->render('index');
//        
//-----------------------------------------------------------------------------
        $sql1 = 'SELECT * FROM news WHERE id=3';
        $res1 = \Yii::$app->db->createCommand($sql1)->queryOne();
        echo '<pre>';
        print_r($res1);
        echo '</pre>';
        echo '<hr>';
        die;

        return $this->render('index');
    }

}
