<?php
namespace app\modules\controllers;
use app\modules\models\Admin;
use yii\web\Controller;
use yii\data\Pagination; /*分页*/
use Yii;
class ManageController extends  Controller{

    /*管理员列表*/
    public  function  actionManagers(){
        $this->layout="layout1";
        $model= Admin::find();
        $count=$model->count();
        $pageSize=Yii::$app->params['PageSize']['size'];
        $page= new Pagination(['totalCount'=>$count,'pageSize'=>$pageSize]);
        $managers=$model->offset($page->offset)->limit($page->limit)->all();
        return $this->render("managers",['managers'=>$managers,'page'=>$page]);
    }


    /* 添加加管理员*/
    public  function  actionReg(){
        $this->layout="layout1";
        $model= new Admin();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->reg($post)){
                Yii::$app->session->setFlash('info','添加成功');
            }else{
                Yii::$app->session->setFlash('info','添加失败');
            }
        }
        return $this->render("reg",['model'=>$model]);
    }


    /*管理员删除*/
    public  function  actionDel()
    {
        $admin=Yii::$app->request->get('id'); //接受参数
        if(empty($admin)){
            $this->redirect(['manage/managers']);
        }
        $model= new Admin;
        if($model->deleteAll('id=:id',[':id'=>$admin])){
            Yii::$app->session->setFlash('info','删除成功');
            $this->redirect(['manage/managers']);
        }
    }


    /*修改密码*/
    public  function  actionChangepassword(){  /*new一下是添加，不能new是修改*/
        $this->layout="layout1";
        $model=Admin::find()->where('name=:name',[':name'=>Yii::$app->session['admin']['name']])->one();
        $model->pwd='';
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->Changepass($post)){
                Yii::$app->session->setFlash('info','修改成功');
            }
        }
        return $this->render('changepassword',['model'=>$model]);
    }
}
