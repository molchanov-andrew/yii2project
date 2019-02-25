<?php
namespace frontend\models\example;

use yii\base\Model;
use Yii;

class Subscribe extends Model{

    public $email;

    public function rules() // валидация
    {
        return[
            [['email'], 'required'], //валидатор required
            [['email'], 'email'], // валидатор email
        ];
    }

    public function save()
    {
        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}');";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}

