<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Product;

class HomeController extends  AppController
{
    public  function actionIndex()
    {
        $offers = Product::find()->where(['is_offer' => 1])->limit(4)->all();
//        dd($offers);
        return $this->render('index', compact('offers'));
    }
}