<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class OrderManagement extends ActiveRecord{

    public $username;
    public  $title;

    public static  function  tableName()
    {
        return "{{%ordermanagement}}";
    }
    public  function  attributeLabels()
    {
        return [
            "pid"=>"",
            "pric"=>"",
            "count"=>"",
            "totalprices"=>"",
            "remark"=>"",
            "uid"=>"",
        ];
    }


}