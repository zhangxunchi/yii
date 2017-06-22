<?php
namespace app\controllers;
use app\models\Detailed;
use app\models\Particular;
use app\models\Product;
use app\models\Shopping;
use app\models\User;
use yii\helpers\Url;
use yii\web\Controller;
use Yii;


class ParticularController extends Controller{

    /*商品详细页面*/
    public function actionIndex(){
        $this->layout=false;
        if(Yii::$app->request->isGet){
            $get=Yii::$app->request->get("id");
            $model= new Product();
            $models= new Detailed();
            $modeles= new Shopping();

            $data=$model::find()->where("productid=:id",[":id"=>$get])->all();

            $information=$models::find()->where("pid=:id",[":id"=>$get])->all();

            $color=$models::findBySql("select color from yii_detailed WHERE pid=:id",[":id"=>$get])->all();

            $size=$models::findBySql("select size from yii_detailed WHERE pid=:id",[":id"=>$get])->asArray()->all();

            /*$uid=intval($use::findBySql("select uid FROM yii_user WHERE username=:username",[":username"=>Yii::$app->session["home"]["name"]])->one());*/

        }
        return $this->render('index',['data'=>$data,'information'=>$information,'modeles'=>$modeles,'color'=>$color,'size'=>$size]);
    }


    //添加到购物车
    public  function  actionAdd(){
        $this->layout=false;
        $model= new Shopping();
        $post=  Yii::$app->request->post();
            if ($model->reg($post)) {
                echo "<script>alert('成功添加到购物车');location='?r=flow/index'</script>";
            } else {
                echo "<script>alert('添加购物车失败')</script>";
            }
        }

}