<?php
namespace app\modules\controllers;
use yii\web\Controller;
use app\models\User;
use app\models\Profile;
use Yii;
use yii\data\Pagination; /*分页*/
class UserController extends  Controller{

    /* 用户列表*/
    public  function  actionUsers(){
        $this->layout="layout1";
        $model=  User::find()->joinWith('profile');/*关联查询*/
        $count=$model->count();
        $Page=Yii::$app->params['PageSize']['size'];
        $data=new Pagination(['totalCount'=>$count,'pageSize'=>$Page]);
        $managers=$model->offset($data->offset)->limit($data->limit)->all();
        return $this->render('users',['managers'=>$managers,'data'=>$data]);
    }

    /* 用户添加*/
    public  function  actionReg(){
        $this->layout="layout1";
        $model= new User();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->reg($post)){
                Yii::$app->session->setFlash('info','添加成功');
            }else{
                Yii::$app->session->setFlash('info','添加失败');
            }
        }
        return $this->render('reg',['model'=>$model]);
    }

    /* 用户删除*/
    public function  actionDel(){
        $get=Yii::$app->request->get('id');
        if(empty($get)){
            $this->redirect(['user/users']);
        }
        $model= new User();
        $models= new Profile();
        if($model->deleteAll('uid=:id',[':id'=>$get])&&$models->deleteAll('uid=:id',[':id'=>$get])){
            Yii::$app->session->setFlash("info",'删除成功');
            $this->redirect(['user/users']);
        }

    }

}