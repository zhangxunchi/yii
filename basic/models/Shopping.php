<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models;
use Yii;
class Shopping extends  ActiveRecord{


    public  $title;

    public  static  function tableName()
    {
        return "{{%shopping}}";
    }

    public  function  attributeLabels()
    {
        return [
            'promotion'=>'',
            'actualprice'=>'',
            'color'=>'',
            'size'=>'',
            'count'=>'',
            'pid'=>''
        ];
    }


    public  function rules()
    {
        return [
            ["pid",'safe'],
            ["promotion",'safe'],
            ["actualprice",'safe'],
            ["count",'safe'],
            ["color",'safe'],
            ["size",'safe'],
        ];
    }

    public  function reg($data){
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


   /* 关联*/
    public  function  getProduct(){
        return $this->hasOne(Product::className(),["productid"=>"pid"]);
    }

}