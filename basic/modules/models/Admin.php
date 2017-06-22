<?php
namespace app\modules\models;
use yii\db\ActiveRecord;
use Yii;
use yii\helpers\Url;
class Admin extends  ActiveRecord{

    public $rememberMer=true;
    public $repass;

    public  static  function tableName()
    {
        return "{{%admin}}";
    }

    //验证
    public  function  rules()
    {
        return [
            ['name','required','message'=>'管理员账号不能为空','on'=>['login','seekPass','adminadd','revamp']],
            ['pwd','required','message'=>'管理员密码不能为空','on'=>['login','adminadd','changepass','revamp']],
            ['rememberMer','boolean','on'=>'login'],
            ['pwd','validatePass','on'=>'login'],
            ['email','required','message'=>'邮箱不能为空','on'=>['seekPass','adminadd']],
            ['email','email','message'=>'邮箱格式不正确','on'=>['seekPass','adminadd']],
            ['email','unique','message'=>'邮箱已被注册','on'=>['adminadd']],
            ['name','unique','message'=>'账号已被注册','on'=>['adminadd']],
            ['email','validateemail','on'=>'seekPass'],
        ];
    }


    /* 登入*/
    public  function  validatePass(){
        if(!$this->hasErrors()){ /*判断是否正确*/
            $data=self::find()->where('name=:name and pwd=:pwd',[':name'=>$this->name,':pwd'=>$this->pwd])->one();
            if(is_null($data)){
                $this->addError('pwd','用户名或密码错误！');
            }
        }

    }


    /* 登入*/
    public  function  login($data)
    {
        $this->scenario="login";
        if($this->load($data) && $this->validate()){
            $lifetime=$this->rememberMer?24*3600:0;   /*check是否被选中*/
            $session=Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['admin']=[
                'name'=>$this->name,
                'isLogin'=>1,
            ];
            $this->updateAll(['logintime'=>date('Y-m-d H:i:s')],'id=:id',[':id'=>self::find()->where('name=:name and pwd=:pwd',[':name'=>$this->name,':pwd'=>$this->pwd])->asArray()->one()['id']]);
            return(bool)$session['admin']['isLogin'];
        }
        return false;
    }


    /* 邮箱*/
    public  function  validateemail(){
        if(!$this->hasErrors()){//如果之前都没有错
            $data= self::find()->where('name=:name  and email=:email',[':name'=>$this->name,'email'=>$this->email])->one();
            if(is_null($data)){
                $this->addError('email','管理员账号不匹配');
            }
        }
    }

    /**邮件发送**/
    public  function  seekPass($data)
    {
        $this->scenario = "seekPass";/*验证场景*/
        if ($this->load($data) && $this->validate()) {   /* load()只是加载数据  validate()才是验证*/
            $mail= Yii::$app->mailer->compose();
            $mail->setTo($this->email); //要发送给那个人的邮箱
            $mail->setSubject("找回密码"); //邮件主题
            $mail->setHtmlBody("<a href='http://localhost:8088/yii/basic/web/index.php?r=admin/retrieve/index'>点击我找回密码</a>"); //发送的消息内容
            if($mail->send()==true){
                $this->addError('email','电子邮箱已发送，请注意查收！');
            }
        }
    }


    public function createToken($name)
    {
        return md5(md5($name).base64_encode(Yii::$app->request->userIP));
    }


    /* 标签属性*/
    public  function  attributeLabels()
    {
        return [
            'name'=>'管理员账号',
            'email'=>'管理员邮箱',
            'pwd'=>'管理员密码',
        ];
    }


    /*管理员添加*/
    public  function  reg($data){
        $this->scenario="adminadd";
        if($this->load($data)&&$this->validate()){ /* validate 验证*/
            $this->pwd=md5($this->pwd);
            $this->logintime=date('Y-m-d H:i:s');
            $this->createtime=date('Y-m-d H:i:s');
            if($this->save(false)){
                return true;
            }
            return false;
        }
        return false;
    }


    /* 修改密码*/
    public  function  Changepass($data){
        $this->scenario="changepass";
        if($this->load($data)&&$this->validate()){
            return $this->updateAll(['pwd'=>$this->pwd],'name=:name',[':name'=>$this->name]);
        }
        return false;
    }

    /*用邮箱发送然后修改密码*/
    public  function  revamp($data){

        $this->scenario="revamp";
        if($this->load($data)&&$this->validate()){
            return $this->updateAll(['pwd'=>$this->pwd],'name=:name',[':name'=>$this->name]);
        }
        return false;
    }
}







