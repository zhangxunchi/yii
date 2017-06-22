<?php
namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Shopping;
use app\models\User;
use yii\web\Controller;
use app\models\index;
use app\models\Notice;
use Yii;

class IndexController extends Controller{
    //首页
    public function  actionIndex(){
        $this->layout="layout1";
        $model= new Product();



        /*特价商品*/
        $depreciate=$model::findBySql("SELECT * FROM yii_product WHERE  promotion=''ORDER BY createtime desc limit 4")->all();

        /* 新品上架*/
        $Protestantism=$model::findBySql("SELECT * FROM yii_product  ORDER BY createtime desc limit 5")->all();

        /* 热卖商品*/
        $bestseller=$model::findBySql("SELECT * FROM yii_product WHERE  ishot=1 ORDER BY createtime desc limit 5 ")->all();

        /*精品推荐*/
        $boutique=$model::findBySql("SELECT * FROM yii_product WHERE promotion>=200 ORDER BY createtime desc limit 5 ")->all();

        /* 女装*/
        $bestseller=$model::findBySql("SELECT * FROM yii_product WHERE  ishot=1 ORDER BY createtime desc limit 5 ")->all();

        /*购物车总数*/
        $shop=Shopping::find()->where("uid=:id",[":id"=>Yii::$app->session["home"]["id"]["id"]["uid"]])->count();

        //站内信息
        $data=Notice::find()->all();
        return  $this->render('index',['depreciate'=>$depreciate,'Protestantism'=>$Protestantism,'bestseller'=>$bestseller,'boutique'=>$boutique,'shop'=>$shop,'data'=>$data]);
    }

    //退出登入
    public  function actionEnd(){
        Yii::$app->session->removeAll();
        if(!isset(Yii::$app->session["home"]["isLogin"])){
            $this->redirect(["public/login"]);
            Yii::$app->end();
        }
        $this->goBack();
    }

    //修改密码
    public  function  actionUpdate(){
        $this->layout=false;
        $model= new User();
        if($model->updateAll(["userpass"=>Yii::$app->session["home"]["pwd"]],["uid" => Yii::$app->session["home"]["id"]["id"]["uid"]])){
            echo "<script>alert('修改密码成功！')</script>";
        }
        return $this->render("update",["model"=>$model]);
    }
}
