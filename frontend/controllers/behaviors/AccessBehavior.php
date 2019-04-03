<?php

/**
 * класс поведения
 * все классы поведений должны быть расширенны от класса Behavior
 * @author andrew
 */

namespace frontend\controllers\behaviors;

use Yii;
use yii\base\Behavior;
use yii\web\Controller;

/**
 * @author admin
 */
class AccessBehavior extends Behavior
{

    public function events()
    {
        return [
            Controller::EVENT_BEFORE_ACTION => 'checkAccess' // указываем какое действие нужно предпринимать при наступлении события (из коробки)
        ];
    }

    public function checkAccess()
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->controller->redirect(['site/index']);
        }
    }

}