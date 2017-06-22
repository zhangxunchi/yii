<?php
namespace app\modules\controllers;
use app\models\OrderManagement;
use yii\web\Controller;
use Yii;
class AccountController extends  Controller{

    public  $layout="layout1";
    //订单显示
    public  function  actionIndex(){
        $ordermanagement = new OrderManagement();
        $data=$ordermanagement->findBySql("select * from yii_user  u ,yii_ordermanagement  o,yii_product p WHERE  u.uid=o.uid and o.pid=p.productid")->all();
        return $this->render("index",["data"=>$data]);
    }

    //订单删除
    public  function  actionDel(){
        $model= new OrderManagement();
        $get=Yii::$app->request->get("id");
        $model->deleteAll("id=:id",[":id"=>$get]);
        return $this->redirect(["account/index"]);
    }

}