<?php

namespace app\models;
use yii\db\ActiveRecord;
use app\models;
use Yii;
class User extends ActiveRecord
{

    public  $truename;
    public  $age;
    public  $sex;
    public  $birthday;
    public  $company;

    public  static  function tableName()
    {
        return "{{%user}}";
    }


    /* 验证*/
    public  function  rules()
    {
        return[
            ['username','required','message'=>'用户名不能为空','on'=>['reg','fackbook']],
            ['userpass','required','message'=>'密码不能为空','on'=>['reg','fackbook']],
            ['useremail','required','message'=>'邮箱密码不能为空','on'=>['reg','enroll','enroll']],
            ['useremail','email','message'=>'邮箱格式不正确','on'=>['reg','enroll','enroll']],
            ['userpass','validatePass','on'=>'fackbook'],
            /* ['truename','required','message'=>'真实姓名不能为空','on'=>['reg','enroll']],
             ['age','required','message'=>'年龄不能为空','on'=>['reg','enroll']],
             ['sex','required','message'=>'性别不能为空','on'=>['reg','enroll']],
             ['birthday','required','message'=>'生日不能为空','on'=>['reg','enroll']],
             ['company','required','message'=>'公司不能为空','on'=>['reg','enroll']],
             ['username','required','message'=>'用户名不能为空','on'=>['reg','enroll']],*/
        ];
    }

    public  function  attributeLabels()
    {
        return ['username'=>'用户名','userpass'=>'密码','useremail'=>'电子邮箱：','truename'=>'真实姓名','age'=>'年龄','sex'=>'性别','birthday'=>'生日','company'=>'公司'];
    }

    /*后台用户注册*/
    public  function  reg($data){
        $this->scenario="reg";
        if($this->load($data)&&$this->validate()){
            $this->createtime=date("Y-m-d H:i:s");
            $this->logintime=date("Y-m-d H:i:s");
            if($this->save(false)){
                return true;
            }
            return false;
        }
        return false;
    }


    /*关联操作*/
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['uid' => 'uid']);
    }

    /*前台用户邮箱注册*/
    public  function  enroll($data){
        $this->scenario="enroll";
        if($this->load($data)&&$this->validate()){
            $this->username=explode("@",$this->useremail)[0];
            $this->userpass=rand(1000,9999);
            $this->createtime=date("Y-m-d H:i:s");
            $this->logintime=date("Y-m-d H:i:s");
            if($this->save(false)){
                $mail= Yii::$app->mailer->compose();
                $mail->setTo($this->useremail); //要发送给那个人的邮箱
                $mail->setSubject("用户名和密码"); //邮件主题
                $mail->setHtmlBody("您的用户名：".$this->username.'<br>'."您的密码：".$this->userpass); //发送的消息内容
                if($mail->send()==true){
                    $this->addError('useremail','注册成功，电子邮箱已发送，请注意查收用户名和密码！');
                }
                return true;
            }
            return false;
        }
        return false;
    }



    /*前台登入*/
    public  function validatePass(){
        if(!$this->hasErrors()){
            $data=self::find()->where("username=:username and userpass=:userpass",[':username'=>$this->username,':userpass'=>$this->userpass])->one();
            if(is_null($data)){
                $this->addError("userpass",'用户名或密码错误');
            }
        }
    }


    /*前台用户登入*/
    public  function fackbook($data){
        $this->scenario="fackbook";
        if($this->load($data)&&$this->validate()){
            $session=Yii::$app->session;
            $session["home"]=[
                "name"=>$this->username,
                "pwd"=>$this->userpass,
                "isLogin"=>1,
                "id"=>["id"=>User::find()->select("uid")->where("username=:name",[":name"=>$this->username])->asArray()->one()],
            ];
            $this->updateAll(["logintime"=>$this->logintime=date("Y-m-d H:s:i")],"uid=:uid",[":uid"=>Yii::$app->session["home"]["id"]["id"]["uid"]]);
            return(bool)$session['home']['isLogin'];
        }else{
            return false;
        }
    }



}
