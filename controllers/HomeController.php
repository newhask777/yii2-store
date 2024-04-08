<?php

namespace app\controllers;

use app\controllers\AppController;

class HomeController extends  AppController
{
    public  function actionIndex()
    {
        return $this->render('index');
    }
}