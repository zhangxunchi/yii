<?php
namespace app\modules\controllers;
use app\modules\models\Admin;
use yii\web\Controller;
use Yii;
class RetrieveController extends  Controller{
      //找回密码
    public function actionIndex()
    {
        $this->layout=false;
        $model= new Admin();
        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            if($model->revamp($post))
            {
                Yii::$app->session->setFlash("info", "修改成功");
            }else{
                Yii::$app->session->setFlash("info","修改失败");
            }
        }
        return $this->render("index",['model'=>$model]);
    }
}