<?php

namespace frontend\controllers;

use frontend\models\forms\SignupForm;
use frontend\models\forms\LoginForm;
use Yii;

class UserController extends \yii\web\Controller {

    public function actionSignup() {
        $model = new SignupForm();

        if ($model->load(\Yii::$app->request->post()) && $user = $model->save()) {
            // добавляем флеш сообщение для пользователя
            \Yii::$app->session->setFlash('success', 'User registered');
            \Yii::$app->user->login($user);

            return $this->redirect(['site/index']);
        }
        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    public function actionLogin() {
        $model = new LoginForm();

        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            
            return $this->redirect(['site/index']);
        }
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    public function actionLogout() {
        \Yii::$app->user->logout();
        return $this->redirect(['site/index']);
    }

}
