<?php
namespace app\modules\controllers;
use yii\web\Controller;
use Yii;
use yii\data\Pagination; /*分页*/
use app\models\Notice;
use app\count;
class NoticeController extends Controller{


    public  $layout="layout1";

    public  function  actionIndex(){
        $data=  Notice::find()->all();
        return $this->render("index",["data"=>$data]);
    }

    /*删除*/
    public  function actionDel(){
        $mode= new Notice();
        $get=Yii::$app->request->get("id");
        if($mode->deleteAll("id=:id",[":id"=>$get])){
            echo"<script>alert('删除成功')</script>";
        }else{
            echo"<script>alert('删除失败')</script>";
        }
        $this->redirect(["notice/index"]);
    }

    /*添加*/
    public  function  actionAdd(){
        $model= new Notice();
        $post= Yii::$app->request->post();

               if ($model->reg($post)) {
                   Yii::$app->session->setFlash('info',"添加成功");
               } else {
                 Yii::$app->session->setFlash('info',"添加失败");
               }

        return $this->render("add",["model"=>$model]);
    }

    public  function  actionUpdate(){

        $get= Yii::$app->request->get("id");
        $model=Notice::find()->where("id=:id",[":id"=>$get])->one();
        $post= Yii::$app->request->post();
        if($model->load($post)&&$model->save()){
            echo"<script>alert('修改成功')</script>";
        }
        else{
            echo"<script>alert('修改失败')</script>";
        }
        return $this->render("add",["model"=>$model]);
    }
}