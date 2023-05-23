<?php

namespace app\controllers;

use app\models\Mahasiswa032;
use yii\data\ActiveDataProvider;

class Mahasiswa032Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa032::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
}
