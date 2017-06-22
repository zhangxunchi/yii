<?php
namespace app\controllers;
use yii\web\Controller;
class GroupController extends Controller{

    public  $layout="layout2";
    public function actionIndex(){
        return $this->render('index');
    }


}