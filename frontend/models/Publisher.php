<?php

namespace frontend\models;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "publisher".
 *
 * @property int $id
 * @property string $name
 * @property string $date_registered
 * @property int $identity_number
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publisher';
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_registered' => 'Date Registered',
            'identity_number' => 'Identity Number',
        ];
    }
    public static function getList()
    {
        // получаем все записи
       $list = self::find()->asArray()->all();// asArray позволяет получить записи в виде массива а не массива объектов
       return ArrayHelper::map($list, 'id', 'name'); // ArrayHelper и метод map позволяют создать массив где id ключ name значение
    }
    
}