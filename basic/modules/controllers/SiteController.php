<?php
namespace app\modules\controllers;
use app\models\Site;
use yii\web\Controller;
use app\models\User;
use Yii;
class SiteController extends  Controller{

    public  $layout="layout1";
    public  function  actionIndex(){
        $data=Site::findBySql("select * from yii_user as U,yii_site as S WHERE  S.uid=U.uid")->all();
        return $this->render("index",["data"=>$data]);
    }

    /*删除配送地址*/
    public  function  actionDel(){
        $mode= new Site();
        $get=Yii::$app->request->get("id");
        if($mode->deleteAll("id=:id",[":id"=>$get])){
            echo"<script>alert('删除成功')</script>";
        }else{
            echo"<script>alert('删除失败')</script>";
        }
        $this->redirect(["site/index"]);
    }
}