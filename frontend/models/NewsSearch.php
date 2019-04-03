<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

class NewsSearch {

    public function simpleSearch($keyword) {
        $sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function fulltextSearch($keyword) {
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST ('$keyword') LIMIT 200";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function advancedSearch($keyword) {
        $sql = "SELECT * FROM idx_news_content WHERE MATCH('$keyword')";
        $data = Yii::$app->sphinx->createCommand($sql)->queryAll();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die;
    }

}
