<?php
namespace app\controllers;
use yii\web\Controller;
class SelfController extends Controller{

    public  $layout="layout2";

    public  function  actionIndex(){
        return $this->render('index');
    }

    public  function  actionAddress(){
        return $this->render('address');
    }

    public  function  actionMyorder(){

        return $this->render('myorder');
    }

    public  function  actionZiliao(){
        return $this->render('ziliao');
    }
}

