<?php
namespace app\controllers;
use app\models\BackRecord;
use app\models\Bank;
use app\models\Flow;
use app\models\Shopping;
use app\models\Site;
use yii\web\Controller;
use app\models\OrderManagement;
use Yii;
class FlowController extends Controller{

    public  $layout="layout3";

    /*购物车首页*/
    public  function actionIndex(){
        $model= new Shopping();
        $data=$model->find()->joinWith("product")->where("uid=:uid",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->all();
        return $this->render("index",["data"=>$data]);
    }

    /*配送订单首页*/
    public  function actionRefer(){
        $model= new Shopping();
        $data=$model->find()->joinWith("product")->where("uid=:id",[":id"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->all();

        $modesls = new Site();
        $datum=$modesls->find()->where("uid=:uid and `default`=:default",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"],":default"=>"1"])->all();

        /**提交订单**/
        $order= new OrderManagement();
        $post=Yii::$app->request->post();
         if($order->load($post)){
             for($i=0;$i<count(Yii::$app->request->post("count"));$i++){
                 Yii::$app->db->createCommand()->batchInsert(OrderManagement::tableName(),['pric','pid','uid','orderid','creationtime','totalprices','count',"remark"],[
                     [Yii::$app->request->post("pric")[$i],Yii::$app->request->post("pid")[$i],Yii::$app->session["home"]["id"]["id"]["uid"],$this->actionOrder(),date("Y-m-d H:s:i"),Yii::$app->request->post("totalprices")[$i],Yii::$app->request->post("count")[$i],Yii::$app->request->post("OrderManagement")["remark"]]
                 ])->execute();
                 echo"<script>alert('结算成功')</script>";
                 $model->deleteAll("uid=:uid",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]])[$i];
             }
             if(is_null(Yii::$app->request->post("count"))){
                 echo"<script>alert('没有商品哦！')</script>";
             }
         }

        /**绑定银行卡**/
        $BackRecord= new BackRecord();
        $post=Yii::$app->request->post();
        if($BackRecord->reg($post)){
            echo "<script>alert('银行卡绑定成功')</script>";
        }

        return $this->render('refer',["data"=>$data,"datum"=>$datum,"order"=>$order,'BackRecord'=>$BackRecord]);
    }

    /*提交订单和配货地址*/
    public  function actionSite(){
        $model= new Site();

        $default=$model->find()->select("default")->where("uid=:uid and `default`=:default",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"],":default"=>"1"])->asArray()->count();//查询否认地址总数

        if(Yii::$app->request->isPost!=null) {

            if (Yii::$app->request->post()['Site']['default'] == 1 && $default == 0) {  /*Yii::$app->request->post()['Site']['default']获取单选框的值判断是否默认*/
                if (Yii::$app->request->isPost) {
                    $post = Yii::$app->request->post();
                    if ($model->reg($post)) {
                        echo "<script>alert('配送成功')</script>";
                    } else {
                        echo "<script>alert('配送失败')</script>";
                    }
                }
            } else if (Yii::$app->request->post()['Site']['default'] == 0) {
                if (Yii::$app->request->isPost) {
                    $post = Yii::$app->request->post();
                    if ($model->reg($post)) {
                        echo "<script>alert('配送成功')</script>";
                    } else {
                        echo "<script>alert('配送失败')</script>";
                    }
                }
            } else {
                if (Yii::$app->request->isPost) {
                    $post = Yii::$app->request->post();
                    $model->updateAll(["`default`" => "0"], ["uid" => Yii::$app->session["home"]["id"]["id"]["uid"], "`default`" => "1"]);
                    if ($model->reg($post)) {
                        echo "<script>alert('配送成功')</script>";
                    } else {
                        echo "<script>alert('配送失败')</script>";
                    }
                }
            }
        }
        return $this->render('site',["model"=>$model]);
    }

    /*删除*/
    public  function  actionDel(){
        $get=Yii::$app->request->get("id");
        $model= new Shopping();
        if($model->deleteAll("id=:id and uid=:uid",[":id"=>$get,":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]])){
            $this->redirect(["flow/index"]);
        }
        return;
    }

    /*配送地址修改*/
    public  function  actionUpdate(){

        $model= Site::find()->where("id=:id and uid=:uid",[":id"=>Yii::$app->request->get("id"),":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->one();

        $default=Site::find()->select("default")->where("uid=:uid and `default`=:default",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"],":default"=>"1"])->asArray()->count();//查询否认地址总数

        if(Yii::$app->request->isPost!=null) {
            if ($model['default'] == 1 && $default == 1 && Yii::$app->request->post()['Site']['default'] == 0) {
                echo "<script>alert('必须要有一个收货地址')</script>";
            } else if ($model['default'] == 0 && $default == 1) {
                if (Yii::$app->request->isPost) {
                    Site::updateAll(["`default`" => "0"], ["uid" => Yii::$app->session["home"]["id"]["id"]["uid"], "`default`" => "1"]);
                    $post = Yii::$app->request->post();
                    if ($model->load($post) && $model->save()) {
                        echo "<script>alert('修改成功！')</script>";
                    }
                }
            }
            else{
                if (Yii::$app->request->isPost) {
                    $post = Yii::$app->request->post();
                    if ($model->load($post) && $model->save()) {
                        echo "<script>alert('修改成功！')</script>";
                    }
                }
            }
        }
        return $this->render('site',["model"=>$model]);
    }

    /*我的收货地址*/
    public  function  actionShipping(){
        $datum=Site::find()->where("uid=:uid",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->orderBy(["creationtime"=>SORT_DESC])->all();
        return $this->render("shipping",["datum"=>$datum]);
    }

    /*我的收货地址删除*/
    public  function  actionDelete()
    {
        $model= new Site();
        $get=Yii::$app->request->get("id");
        if($model->deleteAll("id=:id and uid=:uid",[":id"=>$get,"uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]])){
            return $this->redirect(["flow/shipping"]);
        }
        return $this->render("shipping");
    }

    /**/
    public  function  actionBank(){
        return $this->render("refer");
    }

    /**订单号**/
    public  function  actionOrder(){
        $date=date("Ymd");
        $sum=rand(111,999);
        $code = '';
        for($i=1;$i<=4;$i++){
            $code .= chr(rand(65,90));
        }
        return $date.$sum.$code;
    }
}