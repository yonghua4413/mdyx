<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * 未登录的主页
     * @return string
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    
    /**
     * 未登录的主页
     * @return string
     */
    public function actionLogin()
    {
        return $this->renderPartial('login');
    }
    
    /**
     * 关于我们
     */
    public function actionAbout(){
        return $this->renderPartial('about');
    }
    
    /**
     * 帮助
     */
    public function actionHelp(){
        return $this->renderPartial('help');
    }
}
