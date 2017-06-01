<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class HomeController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

}
