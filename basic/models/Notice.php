<?php
namespace app\models;
use yii\db\ActiveRecord;

class notice extends  ActiveRecord{

    public  static  function  tableName()
    {
        return "{{%notice}}";
    }

    public function rules()
    {
        return [
            ["title","required","message"=>"公告内容必填！"]
        ];
    }

    public  function attributeLabels()
    {
        return [
            "title"=>"公告内容",
        ];
    }

    public  function  reg($data){
        if($this->load($data)&&$this->validate()){
            $this->time=date("Y-m-d h:i:s");
            date_default_timezone_set('PRC');
            if($this->save(false)){
                return true;
            }
            return false;
        }

        return false;
    }
}