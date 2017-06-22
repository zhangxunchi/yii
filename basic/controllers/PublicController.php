<?php
namespace app\controllers;
use app\models\User;
use yii\web\Controller;
use Yii;
class PublicController extends  Controller{

    /*用户注册*/
    public  function  actionLogin(){
        $this->layout=false;
        $model= new User();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            $model->enroll($post);
        }

        return $this->render('login',['model'=>$model]);
    }

    /*用户登入*/
    public  function  actionEnter()
    {
        $this->layout=false;
        $model= new User();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->fackbook($post)){
                $this->redirect(['index/index']);
                Yii::$app->end();
            }
        }


        return $this->render("login",["model"=>$model]);
    }

    public  function  actionQqlogin(){
        require_once("../vendor/qqlogin/qqConnectAPI.php");
        $qc= new \QC();
        $qc->qq_login();
    }

    public  function actionQqcallback()
    {
        require_once("../vendor/qqlogin/qqConnectAPI.php");
        $auth= new \OAuth();
        $accessToken=$auth->qq_callback();
        $openid=$auth->get_openid();
        $qc= new \QC($accessToken,$openid);
        $userinfo=$qc->get_user_info();
        $model= new User();
        $model->username=$userinfo["nickname"];
        $session=Yii::$app->session;
        if($model->save()>0){
            $session["home"]=[
                "name"=>$userinfo["nickname"],
                "isLogin"=>1,
                "id"=>["id"=>User::find()->select("uid")->where("username=:name",[":name"=>$userinfo["nickname"]])->asArray()->one()],
            ];
            $this->redirect(["index/index"]);
        }
    }
}