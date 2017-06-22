<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class BackRecord extends  ActiveRecord{

    public  static  function tableName()
    {
        return"{{%backrecord}}";
    }

    public  function attributeLabels()
    {
        return [

            "name"=>"",
            "number"=>"",
            "cid"=>"",
        ];
    }

    public  function  rules()
    {
        return [
            ["name","required",'message'=>'姓名不能为空'],
            ["number","required",'message'=>'身份证号不能为空'],
            ["cid","required",'message'=>'银行卡号不能为空'],
        ];
    }

    public  function  reg($data){

        if($this->load($data)&&$this->validate()){

            $this->uid=Yii::$app->session["home"]["id"]["id"]["uid"];
            if($this->save(false)){
                return true;
            }
            return false;

        }
        return false;

    }

}