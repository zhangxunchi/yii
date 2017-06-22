<?php

namespace app\modules\controllers;
use app\models\OrderManagement;
use app\models\Product;
use app\models\Category;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\User;
use app\models\Detailed;
use Yii;
use app\models\UploadImageForm;
use yii\web\UploadedFile;/*图片添加*/

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout='layout1';
        $visitor=User::findBySql('select * from yii_user where to_days(logintime) = to_days(now())')->count();//今天访客数
        $data=User::findBySql('SELECT *FROM yii_user where month(curtime()) = month(createtime)')->count();//当前月份的用户数
        /*SELECT *FROM表名 where DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= date(时间字段名)*//*本周订单数*/

        //访客量 默认当前年份
        $january =User::findBySql('SELECT *FROM yii_user where  month(logintime)=1 AND YEAR(curtime()) ')->count(); //一月访客量
        $february =User::findBySql('SELECT *FROM yii_user where month(logintime)=2 AND YEAR(curtime())')->count();//二月访客量
        $march =User::findBySql('SELECT *FROM yii_user where  month(logintime)=3 AND YEAR(curtime())')->count();//三月访客量
        $april =User::findBySql('SELECT *FROM yii_user where month(logintime)=4 AND YEAR(curtime())')->count();//四月访客量
        $may =User::findBySql('SELECT *FROM yii_user where  month(logintime)=5 AND YEAR(curtime())')->count();//五月访客量
        $june =User::findBySql('SELECT *FROM yii_user where  month(logintime)=6 AND YEAR(curtime())')->count();//六月访客量
        $july =User::findBySql('SELECT *FROM yii_user where month(logintime)=7 AND YEAR(curtime())')->count();//七月访客量
        $august =User::findBySql('SELECT *FROM yii_user where month(logintime)=8 AND YEAR(curtime())')->count();//八月访客量
        $september =User::findBySql('SELECT *FROM yii_user where  month(logintime)=9 AND YEAR(curtime())')->count();//九月访客量
        $octorber =User::findBySql('SELECT *FROM yii_user where  month(logintime)=10 AND YEAR(curtime())')->count();//十月访客量
        $november =User::findBySql('SELECT *FROM yii_user where  month(logintime)=11 AND YEAR(curtime())')->count();//十一月访客量
        $december=User::findBySql('SELECT *FROM yii_user where  month(logintime)=12 AND YEAR(curtime())')->count();//十二月访客量



        //用户数 默认当前年份
        $userjanuary=User::findBySql('SELECT *FROM yii_user where month(createtime)=1 AND YEAR(curtime())')->count(); //一月用户量
        $userfebruary=User::findBySql('SELECT *FROM yii_user where month(createtime)=2 AND YEAR(curtime())')->count();//二月用户量
        $usermarch=User::findBySql('SELECT *FROM yii_user where month(createtime)=3 AND YEAR(curtime())')->count();//三月用户量
        $userapril=User::findBySql('SELECT *FROM yii_user where month(createtime)=4 AND YEAR(curtime())')->count();//四月用户量
        $usermay=User::findBySql('SELECT *FROM yii_user where month(createtime)=5 AND YEAR(curtime())')->count();//五月用户量
        $userjune=User::findBySql('SELECT *FROM yii_user where month(createtime)=6 AND YEAR(curtime())')->count();//六月用户量
        $userjuly=User::findBySql('SELECT *FROM yii_user where month(createtime)=7 AND YEAR(curtime())')->count();//七月用户量
        $useraugust=User::findBySql('SELECT *FROM yii_user where month(createtime)=8 AND YEAR(curtime())')->count();//八月用户量
        $userseptember=User::findBySql('SELECT *FROM yii_user where month(createtime)=9 AND YEAR(curtime())')->count();//九月用户量
        $useroctorber=User::findBySql('SELECT *FROM yii_user where month(createtime)=10 AND YEAR(curtime())')->count();//十月用户量
        $usernovember=User::findBySql('SELECT *FROM yii_user where month(createtime)=11 AND YEAR(curtime())')->count();//十一月用户量
        $userdecember=User::findBySql('SELECT *FROM yii_user where month(createtime)=12 AND YEAR(curtime())')->count();//十二月用户量



        /* 商品列表*/
        $amount=Product::find();
        $count=$amount->count();
        $page= new Pagination(['totalCount'=>$count,'pageSize'=>3]);
        $managers=$amount->offset($page->offset)->limit($page->limit)->orderBy(["createtime"=>SORT_DESC])->all();



        //本周订单
        $indent=OrderManagement::findBySql("select * from yii_ordermanagement WHERE DATE_SUB(CURDATE(), INTERVAL 7 DAY) <= date(creationtime)")->count();

        return $this->render('index',['data'=>$data,'visitor'=>$visitor,'january'=>$january,'february'=>$february,'march'=>$march,'april'=>$april,'may'=>$may,'june'=>$june,
            'july'=>$july,'august'=>$august,'september'=>$september,'octorber'=>$octorber,'november'=>$november,'december'=>$december,'userjanuary'=>$userjanuary,'userfebruary'=>$userfebruary,
            'usermarch'=>$usermarch,'userapril'=>$userapril,'usermay'=>$usermay,'userjune'=>$userjune,'userjuly'=>$userjuly,'useraugust'=>$useraugust,'userseptember'=>$userseptember,'useroctorber'=>$useroctorber,
            'usernovember'=>$usernovember,'userdecember'=>$userdecember,'managers'=>$managers,'page'=>$page,'indent'=>$indent
        ]);
    }


    /*添加*/
    public  function  actionAdd(){
        $this->layout="layout1";
        $model= new Product();
        $models=new Category();
        $list=$models->getOptions();

        $modeles = new UploadImageForm();/*图片添加*/

        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();

            $model->cover =UploadedFile::getInstance($model, 'cover');/*图片添加*/

            if($model->reg($post)||$modeles->upload()){ /*图片添加*/
                Yii::$app->session->setFlash('info','添加成功');
            }else{
                Yii::$app->session->setFlash('info','添加失败');
            }
        }
        return $this->render("add",['model'=>$model,'list'=>$list]);
    }


    /*  删除*/
    public  function actionDel(){
        $get=Yii::$app->request->get("id");
        if(empty($get)){
            $this->redirect(['default/index']);
        }

        $model= new Product();
        if($model->deleteAll("productid=:id",[':id'=>$get])){
            Yii::$app->session->setFlash("in","删除成功");
            $this->redirect(["default/index"]);
        }
        return;
    }

    /*是否上架*/
    public  function actionUpdate(){
        $get=Yii::$app->request->get("id");
        if(empty($get)){
            $this->redirect(['default/index']);
        }
        if(Product::updateAll(['state'=>'1'],['productid'=>$get])){
            $this->redirect(["default/index"]);
        }
    }


    /* 商品详细信息添加*/
    public  function  actionParticular(){
        $this->layout="layout1";
        $model= new Detailed();
        $modeles = new UploadImageForm();/*图片添加*/

        $modeless=new Product();

        $get=Yii::$app->request->get("id");
        $data=$modeless::findBySql("select title ,productid from yii_product where productid=:id",[':id'=>$get])->all();/*查询出改商品标题*/


        $datas=$model::find()->where("pid=:id",[":id"=>$get]);
        $count=$datas->count();
        $pagination=new Pagination(['totalCount'=>$count,'pageSize'=>1]);
        $page=$datas->offset($pagination->offset)->limit($pagination->limit)->where("pid=:id",[":id"=>$get])->orderBy(["creationtime"=>SORT_DESC])->all();


        if(Yii::$app->request->isPost){
            $post=Yii::$app->request->post();
            $model->picture =UploadedFile::getInstance($model, 'picture');/*图片添加*/
            if($model->reg($post)||$modeles->upload()){
                Yii::$app->session->setFlash("info","添加成功");
                $this->redirect(["default/particular","id"=>$get]);
            }else{
                Yii::$app->session->setFlash("info","添加失败");
            }
        }
        return $this->render("particular",['model'=>$model,'data'=>$data,'datas'=>$page,'pagination'=>$pagination]);
    }

    public  function delete(){
        $model= new Detailed();
        if(Yii::$app->request->isGet){
            $get=Yii::$app->request->get("id");
           if($model->deleteAll("id=:id",[":id"=>$get])){
               Yii::$app->session->setFlash("in","删除成功");
           }
        }
    }

}
