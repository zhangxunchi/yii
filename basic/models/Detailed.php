<?php
namespace app\models;
use yii\db\ActiveRecord;
class Detailed extends  ActiveRecord{


    public  $title;
    public  $productid;
    public  $cover;
    public $promotion;
    public $price;
    public $descr;
    public $technology;
    public $texture;
    public  $style;
    public  $season;
    public  $thickness;
    public $site;

    public  static  function  tableName()
    {
        return "{{%detailed}}";
    }



    public  function attributeLabels()
    {
        return [
            "size"=>"尺码",
            "color"=>"颜色",
            "picture"=>"详细图片",
            "pid"=>'',
        ];
    }

    public  function  rules()
    {
        return[
            ['size','required','message'=>"尺码不能为空"],
            ['color','required','message'=>"颜色不能为空"],
            ['color','required','message'=>"详细图片不能为空"],
            ['pid','number'],
        ];
    }





    //添加
    public  function reg($data){
        if($this->load($data)&&$this->validate()){
            $this->creationtime=date("Y-m-d H:i:s");
            if($this->save(false)){
                return true;
            }
            return false;
        }
        return false;
    }

}