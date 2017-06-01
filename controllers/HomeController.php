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
    
    /**
     * 添加公众号
     * @return string
     */
    public function actionAdd_oa()
    {
        return $this->renderPartial('add_oa');
    }

}
