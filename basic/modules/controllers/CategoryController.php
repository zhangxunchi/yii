<?php
namespace app\modules\controllers;
use app\models\Category;
use yii\web\Controller;
use Yii;
class CategoryController extends  Controller{

    /*分类列表*/
    public  function  actionList(){
        $this->layout="layout1";
        $model = new Category;
        $cates=$model->getTreeList();
        return $this->render("list",['cates'=>$cates]);
    }

    /*添加分类*/
    public  function actionAdd()
    {
        $this->layout="layout1";
        $model= new Category();
        $list=$model->getOptions();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->add($post)){
                Yii::$app->session->setFlash("info",'添加成功');
            }
        }
        return $this->render('add',['model'=>$model,'list'=>$list]);
    }

    /*分类删除*/
    public function  actionDel(){
        $this->layout=false;
        try{
            $cateid=Yii::$app->request->get('id');
            if(empty($cateid)){
               throw new \Exception("参数错误");
            }
            $data=Category::find()->where("parentid=:id",[':id'=>$cateid])->one();
            if($data){
                throw new \Exception('该分类下有子类，不允许删除');
            }
            if(!Category::deleteAll("id=:id",[":id"=>$cateid])){
                throw new \Exception("删除失败");
            }
        }catch (\Exception $e){
            Yii::$app->session->setFlash("info",$e->getMessage());
        };
        return $this->redirect(['category/list']);
    }

    /*分类编辑*/
    public  function actionUpdate(){
        $this->layout="layout1";
        $model=  Category::find()->where("id=:id",[":id"=>Yii::$app->request->get('id')])->one();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->load($post)&&$model->save()){
                Yii::$app->session->setFlash("info","修改成功");
            }
        }
        $list=$model->getOptions();
        return $this->render("add",["model"=>$model,"list"=>$list]);
    }

}