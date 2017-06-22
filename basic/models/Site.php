<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
use yii\web\User;

class Site extends ActiveRecord{



    public  $username;

    public  static  function  tableName()
    {
        return "{{%site}}";
    }
    public  function  attributeLabels()
    {
        return [
            "consignee"=>"",
            "detailedness"=>"",
            "phone"=>"",
            "email"=>"",
            "postcode"=>"",
            "country"=>"",
            "province"=>"",
            "city"=>"",
            "default"=>"",
        ];
    }

    public  function rules()
    {
        return [
            ["consignee","required","message"=>"收货人姓名不能为空"],
             ["default","required","message"=>"是否默认不能为空！"],
            ["phone","required","message"=>"手机不能为空"],
            ["postcode","required","message"=>"邮编不能为空"],
            ["email","required","message"=>"邮箱不能为空"],
            ["detailedness","required","message"=>"详细地址不能为空"],
            ["email","email","message"=>"邮箱格式错误"],
            ["phone","number","message"=>"手机只能是数字"],
            ["postcode","number","message"=>"邮编只能是数字"],
        ];
    }

    public  function  reg($data){
        if($this->load($data)&&$this->validate()){
            $this->creationtime=date("Y-m-d H:i:s");
            $this->uid=Yii::$app->session["home"]["id"]["id"]["uid"];
            if($this->save(false)){
                return true;
            }
            return false;
        }
        return false;
    }





}