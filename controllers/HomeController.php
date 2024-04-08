<?php

namespace app\controllers;

use app\controllers\AppController;

class HomeController extends  AppController
{
    public  function actionIndex()
    {
dd('s');
        return $this->render('index');
    }
}