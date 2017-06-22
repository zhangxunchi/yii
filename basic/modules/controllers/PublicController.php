<?php
namespace app\modules\controllers;
use yii\web\Controller;
use app\modules\models\Admin;
use Yii;
class PublicController extends Controller{

    /* 登入*/
    public   function actionLogin(){
        $this->layout=false;
        $model= new Admin;
        if(Yii::$app->request->isPost){ /*判断是否是post提交*/

            $post=Yii::$app->request->post();//接受post传过来的值
            if($model->login($post)){
                $this->redirect(['default/index']);
                Yii::$app->end();
            }
        }
        return $this->render('login',['model'=>$model]);
    }


    //找回密码
    public  function  actionSeeckpassword(){
        $this->layout=false;
        $model= new Admin;
        if(Yii::$app->request->isPost){ //验证是否是post提交
            $post= Yii::$app->request->post(); /*接受post值*/
            $model->seekPass($post); /*发送电子邮件seekpass的方法*/
        }
        return $this->render('seeckpassword',['model'=>$model]);
    }

}